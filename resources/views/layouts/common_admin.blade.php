<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>I/OM=>manager_stamp</title>
   <meta name="viewport" content="width=device-width,initial-scale=1">




   @yield('css')
   <link rel="stylesheet" href="{{ asset('css/all.css') }}">
   @yield('style')
 </head>
 <!-- ↑宣言関係↑ -->
 <body>       
	<!-- ↓トップバーの内容↓ -->
	<div class="top_bar">
		<div class="top_bar_brand">shift=>manager</div>
		<div class="top_bar_user">
			<div class="login_user_title">現在のログインユーザー</div>
			<div class="top_bar_user_name">{{Auth::user()->name}}<span class="sama">様</span></div>
		</div>
	</div>
	<!-- ↑トップバーの内容↑ -->
    <!-- ↓トップメニューの内容↓ -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <ul class="dropdwn">
        <li>HOME</li>
        <li>A
            <ul class="dropdwn_menu">
                <li><a href="#">A1</a></li>
                <li><a href="#">A2</a></li>
            </ul>
        </li>
        <li>B
            <ul class="dropdwn_menu">
                <li><a href="#">B1</a></li>
                <li><a href="#">B2</a></li>
                <li><a href="#">B3</a></li>
            </ul>
        </li>
        <li>C
            <ul class="dropdwn_menu">
                <li><a href="#">C1</a></li>
                <li><a href="#">C2</a></li>
                <li><a href="#">C3</a></li>
                <li><a href="#">C4</a></li>
            </ul>
        </li>
        <li>D
            <ul class="dropdwn_menu">
                <li><a href="#">D1</a></li>
                <li><a href="#">D2</a></li>
                <li><a href="#">D3</a></li>
                <li><a href="#">D4</a></li>
                <li><a href="#">D5</a></li>
            </ul>
        </li>
    </ul>
    <script>
        $(function(){
            $('.dropdwn li').hover(function(){
                $("ul:not(:animated)", this).slideDown();
            }, function(){
                $("ul.dropdwn_menu",this).slideUp();
            });
        });
    </script>
	<!-- ↑トップメニューの内容↑ -->
	<!-- ↓固有コンテンツ表示領域↓ -->
	@yield('content')
	<!-- ↑固有コンテンツ表示領域↑ -->
<!-- ↑サイト表示領域とpure-drawer↑ -->
@yield('script')
 </body>
 </html> 