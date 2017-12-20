@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<h3 class="signup-heading">Change Password</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('admin/change-password') }}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="password" name="old_password" spellcheck="false"
									   data-msg-required="Old Password" required >
								<label class="md-control-label">Old Password</label>
							</div>
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="password" name="password" spellcheck="false"
									   data-msg-required="New Password" required >
								<label class="md-control-label">New Password</label>
							</div>
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="password" name="password_confirmation" spellcheck="false"
									   data-msg-required="Confirm password" required >
								<label class="md-control-label">Confirm Password</label>
							</div>
						</div>
					</div>

					<button class="btn btn-primary btn-block" type="submit">Change Password</button>
				</form>

			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection