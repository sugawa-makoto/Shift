@extends('layouts.common_admin')
<!-- cssの追加 -->
@section('css')

@endsection
<!-- コンテンツ領域 -->
@section('content')
<form action="{{ url('/employee_setting')}}" method="POST" class="form-horizontal">
  {{ csrf_field() }}
  <textarea rows="6" name="message"></textarea>

<table class="emplayee_setting_table">
    <thead>
        <tr>
        <th colspan="4">従業員シフト形態設定</th>
        <th>出勤可能曜日</th>
        <th>月最大可動日数</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td>スガワマコト</td>
            <input type="checkbox" name="camera_video[]" value="{{$video->id}}"> <label>{{$video->name}}</label>
            <td>
                <p>
                    <input type="checkbox" name="youbi" value="1">月
                    <input type="checkbox" name="youbi" value="2">火
                    <input type="checkbox" name="youbi" value="3">水
                    <input type="checkbox" name="youbi" value="1">木
                    <input type="checkbox" name="youbi" value="2">金
                    <input type="checkbox" name="youbi" value="3">土
                    <input type="checkbox" name="youbi" value="1">日
                </p>
            </td>
            <td>
                <p>
                    <select name="blood">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    </select>
                </p>
            </td>
        </tr>
        
    </tbody>
</table>
<button type="submit" name="add">
   追加
  </button>
</form>
@endsection