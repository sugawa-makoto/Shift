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
            <a href="">
                <p>会社設定</p>
            </a>
        </div>
        <div class="saystem_setting__employee-setting-btn">
            <a href="">
                <p>従業員設定</p>
            </a>
        </div>
    </div>
    <div class="saystem_setting__system-btn_wrapper">
        <a href="http://127.0.0.1:8000/saystem_setting">
            戻る
        </a>
    </div>
</div>
@endsection