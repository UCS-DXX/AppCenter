@extends('layouts.master')
@section('content')
	<div class="hero-area">
		<div class="container-fluid">
			<ul>
				<li>
					<a href="#">
						sign up
					</a>
				</li>
				<li>
					<a href="#">
						login
					</a>
				</li>
				<li>
					<a href="#">
						dashboard
					</a>
				</li>
			</ul>
			<div class="col-md-12 text-center intro-div">
				<p class="intro">
					Introducing
				</p>
				<a href="#">
					<img src="{{ asset('assets/images/logo-black.png') }}">
				</a>
			</div>
		</div>
	</div>
@endsection