<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Date;
use App\Models\App_user;
use App\Models\Shift;
use App\Models\Type;
use App\Models\Users_types;
use App\Models\Youbi_number;
use App\User;
use DateTime;
use DB;

use Illuminate\Http\Request;
class ShiftController extends Controller
{

    public function make_draft_shift(){
        $carbon = Carbon::now();
        $now_year = $carbon->year; //今年
        $now_month = $carbon->month; //今月
        $next_month =  $now_month+1;// 来月
        //さあ次のシフトつーくろ！！ポチ！
        //既に次のシフトがあったら作らないようにしたい！
        //今年の来月が有るかどうか判断
        //↓判断基準とする（今年の来月のdatesテーブルのid）
        $bases_date_ids = Date::where('year', $now_year)->where('month', $next_month)->pluck('id');
        //↓比較対象
        $shift_date_ids = Shift::pluck('date_id');
        //↓後ほど判断で使う変数を用意しているだけ
        $shift_exists = false;
        foreach($bases_date_ids as $bases_date_id) {
            //$shift_date_idsと$bases_date_idsを突き合わせて一つでも一致するものは有るか？
            if($shift_date_ids->contains($bases_date_id)) {
                //一つでも一致するものが有るようなら$shift_exists = false;をtrueにしてif文を抜ける
                $shift_exists = true;
                break;
            }
        }
        //もし$shift_exists = true;ならシフトは作る必要が無いのでreturn viewする
        if($shift_exists){
            return view('make_draft_shift');
        }
        //上記の条件をすり抜けて来たらシフトが必要だから作る
        //ココからシフト作成開始
        //12月のとき困るから条件を足しておく
        if($now_month == 12) {
            $now_year = $now_year + 1;
            $next_month = 1;
        }
        $dates_now_month = Date::where('year', $now_year)->where('month',$next_month)->get();
        foreach($dates_now_month as $date){
            // その日が何曜日か判断
            $mdw = $date->mdw; //配列の中の１日分を取り出した
            $datetime = new DateTime($mdw);
            $w = (int)$datetime->format('w');   //曜日の出力（数字で）
            $ww = $w+1;//youbi_idは１から始まるので補正
            //その曜日に紐づくtypesテーブルのidは？
            $find_type_ids= Type::where('youbi_id',$ww)->pluck('id');
            //1.8.15.22.29.36.43.50が出た
            //$type_ids一つづつに紐付いている人を導く
            foreach($find_type_ids as $type_id) {
                //まず一回転目で1が出るのでそれに紐づく人はだれかな？
                $find_user_id= Users_types::where('type_id',$type_id)->pluck('user_id');
                //user_id1.3.5の人がtypesテーブルのid1に紐付いている
                //それって誰なの?
                foreach($find_user_id as $user_id) {
                    //まず一回転目で8が出るのでそれに紐づく人はだれかな？
                    $shift = new Shift;
                    $shift->date_id = $date->id;
                    $shift->user_id = $user_id;
                    $shift->save();
                }
            }
        }return view('make_draft_shift');
    }
    public function search_draft_shift(){
        
    }
}
