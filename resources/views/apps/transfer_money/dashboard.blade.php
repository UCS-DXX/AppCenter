@extends('master')
@section('custom-includes')

@endsection
@section('content')
	@if (session('err_msg'))
		<div class="alert alert-danger">
			{{ session('err_msg') }}
		</div>
	@endif
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection