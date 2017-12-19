<!DOCTYPE html>
<html lang="en">
@include('head')
<body class="layout layout-header-fixed">
	@include('header')
	<div class="layout-main">
		@include('apps.'.Session::get("appName") .'.sidebar')
		<div class="layout-content">
			@yield('content')
		</div>
		<div class="layout-footer">
			@include('footer')
		</div>
	</div>
</body>
@yield('custom-script')
</html>