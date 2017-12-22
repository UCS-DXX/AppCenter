<!DOCTYPE html>
<html lang="en">
@include('head')
<body class="layout layout-header-fixed">
	@include('header')
	<div class="layout-main">
		@include('apps.'.Session::get("appName") .'.sidebar')
		<div class="layout-content">
			@if (session('err_msg'))
				<div class="alert alert-danger">
					{{ session('err_msg') }}
				</div>
			@endif
			@yield('content')
		</div>
		<div class="layout-footer">
			@include('footer')
		</div>
	</div>
</body>
@yield('custom-script')
</html>