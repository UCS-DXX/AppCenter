@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<h3 class="signup-heading">Create New Customer</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('admin/create-user-permission') }}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" name="username" spellcheck="false"
								       data-msg-required="Please enter username." required>
								<label class="md-control-label">Username</label>
							</div>
							<div class="md-form-group md-label-floating">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="viewer" checked="checked"> Viewer
									</label>
							</div>
							<div class="md-form-group md-label-floating">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="maker" checked="checked"> Maker
									</label>
							</div>
								<div class="md-form-group md-label-floating">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="checker" checked="checked"> Checker
										</label>
									</div>
						</div>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Create</button>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection