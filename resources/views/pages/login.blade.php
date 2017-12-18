@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="{{ asset('assets/css/login-3.min.css') }}">
@endsection
@section('content')
	<body>
	<div class="login">
		<div class="login-body">
			<a class="login-brand" href="{{ URL::to('/') }}">
				<img class="img-responsive" src="{{ asset('assets/images/logo-black.png') }}" alt=""/>
			</a>
			<h3 class="login-heading">Sign in</h3>
			<div class="login-form">
				<form data-toggle="md-validator">
					<div class="md-form-group md-label-floating">
						<input class="md-form-control" type="email" name="email" spellcheck="false" autocomplete="off"
						       data-msg-required="Please enter your email address." required>
						<label class="md-control-label">Email</label>
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
		<div class="login-footer">
			Don't have an account?
			<a href="{{ URL::to('register') }}">Sign Up</a>
		</div>
	</div>
	@endsection
	@section('custom-script')
		@include('layouts/partials/script')
	</body>
@endsection