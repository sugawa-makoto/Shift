<?php

namespace App\Http\Controllers;
use App\Models\Company_setting;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Date;
use App\Models\App_user;
use App\Models\Youbi;
use App\Models\Shift;
use App\Models\Dayofweek;
use App\Models\Work;
use App\Models\Time;
use App\Models\Type;
use App\Models\Users_types;
use DateTime;
use App\User;
use DB;

use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function test(){
        
        return view('test');
    }
    public function test_start(){

        //datesテーブル生成
        $carbon = Carbon::now();
        $carbon_year = $carbon->year; //今年
        $carbon_month = $carbon->month; //今月
        $carbon_month2 = $carbon->month.'月'; //今月
        $carbon_day = $carbon->day;//今日
        $carbon_today = Carbon::today();//今日は何年何月何日
        $carbon_several_days = $carbon->daysInMonth;//今月の日数
        //当月分のカレンダー配列がなければ作る、あれば作らせない
        $one_day = Date::where('mdw', 'LIKE', "%$carbon_month2%")->exists();
            if ($one_day) {
        
        }
        else
        {
            $date = [];
            for ($i=1; $i <= $carbon_several_days; $i++) {
                $carbon_date = Carbon::parse("$carbon_year-$carbon_month-$i");
                // 以下で日本語ロケールをセットしています。
                setlocale(LC_ALL, 'ja_JP.UTF-8');
                // 以下の記述で「2019/01/01（火）」のように曜日入りで表示できるようになります。
                $dayOfWeek =  $carbon_date->formatLocalized('%m月%d日(%a)');
                $date[] = ['year' => $carbon_year, 'mdw' => $carbon_date];
            }
            Date::insert($date);
        }

        $dates = Date::all();
        foreach($dates as $date){
            // その日が何曜日か判断
            $mdw = $date->mdw; //配列の中の１日分を取り出した
            $datetime = new DateTime($mdw);
            $weekList = array("日", "月", "火", "水", "木", "金", "土");
            $w = (int)$datetime->format('w');   //曜日の出力（数字で）
            $youbi = $weekList[$w].'曜日';      //曜日の出力（日本語で）
            //その曜日に紐づくtypesテーブルのidは？
            $find_type_id= Type::where('youbi_id',$w)->pluck('id');
            //6.13.20.27.34.41.48.55が出た
            //$type_ids一つづつに紐付いている人を導く
            foreach($find_type_id as $type_id) {
                //まず一回転目で６が出るのでそれに紐づく人はだれかな？
                $find_user_id= Users_types::where('type_id',$type_id)->pluck('user_id');
                //user_id8.2.4の人がtypesテーブルのid６に紐付いている
                //それって誰なの?
                foreach($find_user_id as $user_id) {
                    $shift = new Shift;
                    $shift->date_id = $date->id;
                    $shift->user_id = $user_id;
                    $shift->save();
                }
            }
        }
    }



    
    public function company_setting(){
        
        return view('company_setting');
    }
    public function employee_setting(){
      
        return view('employee_setting');
    }
    public function employee_setting_send(Request $request){
        return view('employee_setting');
    }
    public function main_menu(){
        
        return view('main_menu');
    }
    public function saystem_setting(){
        
        return view('saystem_setting');
    }
    public function saystem_setting__company_setting(){
        
        return view('saystem_setting__company_setting');
    }
    public function saystem_setting__employee_setting(){
        
        return view('saystem_setting__employee_setting');
    }
    public function saystem_setting__company_setting__post(Request $request){

            $request->validate([
                'company_name' => 'required|string|max:255',    // 必須・文字列・２５５文字以内
                'work_name' => 'required|string|max:255',       // 必須・文字列・２５５文字以内
                'work_detail' => 'required|string|max:255',     // 必須・文字列・２５５文字以内
                'work_time1' => 'required',  // 必須・時間
                'work_time2' => 'required',  // 必須・時間
                'umberofpeople' => 'required|integer', // 必須・整数
                'oneday_maximum_continuous_shift' => 'required|integer', // 必須・整数
            ]);        

            $record = new Company_setting;
            $record->company_name = $request->company_name;
            $record->work_name = $request->work_name;
            $record->work_detail = $request->work_detail;
            $record->work_time1 = $request->work_time1;
            $record->work_time2 = $request->work_time2;
            $record->umberofpeople = $request->umberofpeople;
            $record->oneday_maximum_continuous_shift = $request->oneday_maximum_continuous_shift;
            $record->save();
            
            // 二重送信対策
            $request->session()->regenerateToken();
            return view('saystem_setting__company_setting');
    }
}
