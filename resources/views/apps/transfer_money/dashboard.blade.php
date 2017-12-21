@extends('master')
@section('custom-includes')

@endsection
@section('content')
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection