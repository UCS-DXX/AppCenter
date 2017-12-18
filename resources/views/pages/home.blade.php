@extends('layouts.master')
@section('custom-includes')
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('assets/css/custom-tb.css') }}">
@endsection
@section('content')
	<body>
	<div class="hero-area">
		<div class="container-fluid">
			<ul>
				<li>
					<a href="{{ URL::to('register') }}">sign up</a>
				</li>
				<li>
					<a href="{{ URL::to('login') }}">login</a>
				</li>
				<li>
					<a href="{{ URL::to('dashboard') }}">dashboard</a>
				</li>
			</ul>
			<div class="col-md-12 text-center intro-div">
				<p class="intro">Introducing</p>
				<a href="#">
					<img src="{{ asset('assets/images/logo-black.png') }}" width="300px"/>
				</a>
			</div>
		</div>
	</div>
	@endsection
	@section('custom-script')
		@include('layouts/partials/script')
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
@endsection