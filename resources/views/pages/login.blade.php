@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/login-3.min.css') }}">
@endsection
@section('content')
	<body>
	<div class="login">
		@if (session('err_msg'))
			<div class="alert alert-danger">
				{{ session('err_msg') }}
			</div>
		@endif
		<div class="login-body">
			<a class="" style="display: flex; justify-content: center;" href="{{ URL::to('/') }}">
				<img class="img-flag" src="{{ asset('assets/images/dcb_logo.png') }}" style="width: 160px; height: 42px;" alt=""/>
			</a>
			<h3 class="login-heading" style="font-weight: 400">App Center</h3>
			<h4 class="login-heading">Sign in</h4>
			<div class="login-form">
				<form data-toggle="md-validator" action="{{ URL::to('login') }}" method="post">
					{{ csrf_field() }}
					<div class="md-form-group md-label-floating">
						<input class="md-form-control" type="text" name="username" spellcheck="false" autocomplete="off"
						       data-msg-required="Please enter your email address." required>
						<label class="md-control-label">Username</label>
					</div>
					<div class="md-form-group md-label-floating">
						<input class="md-form-control" type="password" name="password" minlength="6"
						       data-msg-minlength="Password must be 6 characters or more."
						       data-msg-required="Please enter your password." required>
						<label class="md-control-label">Password</label>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Sign in</button>
				</form>
			</div>
		</div>
	</div>
	@endsection
	@section('custom-script')
		@include('layouts/partials/script')
	</body>
@endsection