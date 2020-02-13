<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Shift=>manager</title>
   <meta name="viewport" content="width=device-width,initial-scale=1">
   @yield('css')
   <link rel="stylesheet" href="{{ asset('css/all.css') }}">
   @yield('style')
 </head>
 <!-- ↑宣言関係↑ -->
 <body>       
	<!-- ↓トップバーの内容↓ -->
	<div class="top_bar">
		<div class="top_bar_brand">Shift=>manager</div>
	</div>
	<!-- ↑トップバーの内容↑ -->
	<!-- ↓トップメニューの内容↓ -->
	<!-- ↑トップメニューの内容↑ -->
	<!-- ↓固有コンテンツ表示領域↓ -->
	@yield('content')
	<!-- ↑固有コンテンツ表示領域↑ -->
<!-- ↑サイト表示領域とpure-drawer↑ -->
@yield('script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>
 </html> 