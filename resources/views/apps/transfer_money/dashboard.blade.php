@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title">
				<span class="d-ib">Welcome to Transfer Money Dashboard</span>
			</h1>
		</div>
	</div>

@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection