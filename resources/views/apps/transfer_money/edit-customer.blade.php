@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<h3 class="signup-heading">Edit Customer</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('update-customer') }}" method="post">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $data['customer']['id'] }}" name="id">
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['name'] }}" name="name" spellcheck="false"
								       data-msg-required="Please enter your name." required>
								<label class="md-control-label">Name</label>
							</div>
						</div>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Update</button>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection