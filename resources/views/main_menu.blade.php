@extends('layouts.common')
<!-- cssの追加 -->
@section('css')
<link rel="stylesheet" href="css/all.css">
@endsection
<!-- コンテンツ領域 -->
@section('content')
<div class="main-menu__contents-wrapper">
    <div class="main-menu__btns">
        <div class="main-menu__shift-create-btn">
            <p>シフト作成</p>
        </div>
        <div class="main-menu__shift-edit-btn">
            <p>公開シフト編集</p>
        </div>
        <div class="main-menu__shift-reference-btn">
            <p>シフト参照</p>
        </div>
    </div>
    <div class="main-menu__system-btn">
        <a href="http://127.0.0.1:8000/saystem_setting">
            <svg xmlns="http://www.w3.org/2000/svg" width="116" height="84" viewBox="0 0 116 84">
                <g id="グループ_1504" data-name="グループ 1504" transform="translate(-1792 -977)">
                <g id="グループ_178" data-name="グループ 178" transform="translate(1 118)">
                <path id="多角形_1" data-name="多角形 1" d="M53.886,5.959a5,5,0,0,1,8.229,0l48.472,70.2A5,5,0,0,1,106.472,84H9.528a5,5,0,0,1-4.114-7.841Z" transform="translate(1791 859)" fill="#ffe100"/>
                <text id="システム_設定" data-name="システム設定" transform="translate(1849 909)" font-size="15" font-family="HiraginoSans-W6, Hiragino Sans">
                <tspan x="-29.175" y="0">システム</tspan><tspan y="0" font-family="Helvetica-Bold, Helvetica" font-weight="700">
                </tspan><tspan x="-15" y="26">設定</tspan></text>
                <text id="_" data-name="！" transform="translate(1849 922)" fill="red" font-size="30" font-family="HiraginoSans-W6, Hiragino Sans" opacity="0.454">
                <tspan x="-15" y="0">！</tspan></text>
                </g>
                </g>
            </svg>
        </a>
    </div>
</div>
@endsection