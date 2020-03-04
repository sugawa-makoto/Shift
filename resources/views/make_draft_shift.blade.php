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
            <a href="make_draft_shift">
                <p>次月のシフトを作る</p>
            </a>
        </div>
    </div>
    <div class="saystem_setting__system-btn_wrapper">
        <a href="#">
            戻る
        </a>
    </div>
</div>
@endsection