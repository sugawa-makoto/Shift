<?php

namespace App\Http\Controllers;
use App\Models\Company_setting;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;



use Illuminate\Http\Request;
class AdminController extends Controller
{
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
