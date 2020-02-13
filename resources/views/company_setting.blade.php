@extends('layouts.common')
<!-- cssの追加 -->
@section('css')

@endsection
<!-- コンテンツ領域 -->
@section('content')
<div class="company_setting_allwrapper">
<form action="cgi-bin/formmail.cgi" method="post">
<p>
出勤パターン：<select name="blood">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</p>
<p>各出勤パターン勤務人数</p>
<p>
A：<select name="blood">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</p>
<p>
B：<select name="blood">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</p>
<p>
C：<select name="blood">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</p>
<p>
一日最大連続シフト設定：<select name="blood">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</p>
</form>
</div>
<a href="#" class="btn btn-default">Default</a>
<a href="#" class="btn btn-primary">Primary</a>
<div class="red">
<a href="#" class="btn btn-success">Success</a>
</div>
<a href="#" class="btn btn-info">Info</a>
<a href="#" class="btn btn-warning blue">Warning</a>
<a href="#" class="btn btn-danger">Danger</a>


@endsection
@section('content')

@endsection