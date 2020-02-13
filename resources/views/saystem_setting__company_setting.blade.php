
@extends('layouts.common')
<!-- cssの追加 -->
@section('css')
<link rel="stylesheet" href="css/all.css">
@endsection
<!-- コンテンツ領域 -->
@section('content')
<div class="saystem_setting__company_setting__contents_wrapper_wrapper">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('/saystem_setting__company_setting')}}" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <div class="saystem_setting__company_setting__contents_wrapper">
        <div class="saystem_setting__company_setting__h1_title">
            会社設定
        </div>
        <div class="saystem_setting__company_setting__company_name">
            <div class="saystem_setting__company_setting__company_name__title">
                会社名設定
            </div>
            <div class="saystem_setting__company_setting__company_name__input">
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="company_name"></textarea>
                </div>
            </div>
        </div>      
        <div class="saystem_setting__company_setting__shift_pattern">
            <div class="saystem_setting__company_setting__shift_pattern__title">
                シフトパターン設定
            </div>
            <div class="saystem_setting__company_setting__shift_pattern__inputs">
                <div class="saystem_setting__company_setting__shift_pattern__inputs__work_name">
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_name__title">
                        <p>業務名称設定</p>
                    </div>
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_name__input">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="work_name"></textarea>
                        </div>
                    </div>
                </div>
                <div class="saystem_setting__company_setting__shift_pattern__inputs__work_detail">
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_detail__title">
                        <p>業務内容設定</p>
                    </div>
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_detail__input">
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="work_detail"></textarea>
                        </div>
                    </div>
                </div>
                <div class="saystem_setting__company_setting__shift_pattern__inputs__work_time">
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_time__title">
                        <p>業務時間設定</p>
                    </div>
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_time__input">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="work_time1">
                            <option>0:00</option>
                            <option>1:00</option>
                            <option>2:00</option>
                            <option>3:00</option>
                            <option>4:00</option>
                            <option>5:00</option>
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>19:00</option>
                            <option>20:00</option>
                            <option>21:00</option>
                            <option>22:00</option>
                            <option>23:00</option>
                            <option>24:00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="work_time2">
                            <option>0:00</option>
                            <option>1:00</option>
                            <option>2:00</option>
                            <option>3:00</option>
                            <option>4:00</option>
                            <option>5:00</option>
                            <option>6:00</option>
                            <option>7:00</option>
                            <option>8:00</option>
                            <option>9:00</option>
                            <option>10:00</option>
                            <option>12:00</option>
                            <option>13:00</option>
                            <option>14:00</option>
                            <option>15:00</option>
                            <option>16:00</option>
                            <option>17:00</option>
                            <option>18:00</option>
                            <option>19:00</option>
                            <option>20:00</option>
                            <option>21:00</option>
                            <option>22:00</option>
                            <option>23:00</option>
                            <option>24:00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="saystem_setting__company_setting__shift_pattern__inputs__work_numberofpeople">
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_numberofpeople__title">
                        <p>人数設定</p>
                    </div>
                    <div class="saystem_setting__company_setting__shift_pattern__inputs__work_numberofpeople__input">
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1" name="umberofpeople">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            </select>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="saystem_setting__company_setting__shift_pattern__plus_btn">
                <a href="#"><img class="saystem_setting__company_setting__shift_pattern__plus_btn__img" src="{{ asset('/img/plus_btn.png') }}" alt="system-btn"></a>
            </div>
        </div>
        <div class="saystem_setting__company_setting__shift_pattern__oneday_maximum_continuous_shift">
            <div class="saystem_setting__company_setting__shift_pattern__oneday_maximum_continuous_shift__title">
                一日最大連続シフト設定
            </div>
            <div class="saystem_setting__company_setting__shift_pattern__oneday_maximum_continuous_shift__imput">
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="oneday_maximum_continuous_shift">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="http://127.0.0.1:8000/main_menu"><div class="return">戻る</div></a>
</div>
@endsection