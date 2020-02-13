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
</div>
<a href="http://127.0.0.1:8000/saystem_setting"><img class="main-menu__system-btn" src="{{ asset('/img/system-btn.png') }}" alt="system-btn"></a>
@endsection