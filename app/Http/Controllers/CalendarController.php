<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //datesテーブル生成
    $carbon = Carbon::now();
    $carbon_year = $carbon->year; //今年
    $carbon_month = $carbon->month; //今月
    $carbon_month2 = $carbon->month.'月'; //今月
    $carbon_day = $carbon->day;//今日
    $carbon_today = Carbon::today();//今日は何年何月何日
    $carbon_several_days = $carbon->daysInMonth;//今月の日数
    $carbon_firstday = Carbon::now()->startOfMonth();//今月月初
    $carbon_firstday_time = Carbon::now()->startOfMonth()->toDateString();
    //当月分のカレンダー配列がなければ作る、あれば作らせない
    $one_day = Date::where('year', $carbon_year)->where('mdw',$carbon_firstday)->exists();
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
