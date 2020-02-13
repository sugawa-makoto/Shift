<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>I/OM=>manager_stamp</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	@yield('css')
	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@yield('style')
	</head>
	<!-- ↑宣言関係↑ -->
	<body>
		<div class="full-page">
			<!-- ↓トップバーの内容↓ -->
			<div class="top_bar">
				<div class="top_bar_brand">Shift=>manager</div>
				<div class="top_bar_user">
					<div class="login_user_title fontsize10">現在のログインユーザー</div>
					<div class="top_bar_user_name">{{Auth::user()->name}}<span class="sama fontsize10">様</span></div>
				</div>
			</div>
			<!-- ↑トップバーの内容↑ -->
			<!-- ↓トップメニューの内容↓ -->

			<!-- ↑トップメニューの内容↑ -->
			<!-- ↓固有コンテンツ表示領域↓ -->
			@yield('content')
			<!-- ↑固有コンテンツ表示領域↑ -->
		</div>       
		@yield('script')
	</body>
	</html> 