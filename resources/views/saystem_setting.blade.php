@extends('layouts.common')
<!-- cssの追加 -->
@section('css')
<link rel="stylesheet" href="css/all.css">
@endsection
<!-- コンテンツ領域 -->
@section('content')
<div class="saystem_setting__contents-wrapper">
    <div class="saystem_setting__btns">
        <div class="saystem_setting__company-setting-btn">
            <a href="http://127.0.0.1:8000/saystem_setting__company_setting">
                <p>会社設定</p>
            </a>
        </div>
        <div class="saystem_setting__employee-setting-btn">
        <a href="http://127.0.0.1:8000/saystem_setting__employee_setting">
            <p>従業員設定</p>
        </a>
        </div>
    </div>
</div>
<a href="http://127.0.0.1:8000/main_menu"><div class="return">戻る</div></a>
@endsection