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
									   data-msg-required="Please enter username." required @if(isset($user_permission[0])) readonly value="{{ $user_permission[0]['user_id'] }}" @endif>
								<label class="md-control-label">Username</label>
							</div>
							<div class="md-form-group md-label-floating">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="viewer" @if(isset($user_permission[0]['viewer']) && $user_permission[0]['viewer'] == 1 ) checked="checked" @endif> Viewer
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="maker" @if(isset($user_permission[0]['maker']) && $user_permission[0]['maker'] == 1 )checked="checked" @endif> Maker
									</label>
								</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="checker" @if(isset($user_permission[0]['checker']) && $user_permission[0]['checker'] == 1 )checked="checked" @endif> Checker
										</label>
									</div>
								</div>
							</div>
						</div>
						@if(isset($user_permission[0]))
							<input type="hidden" name="user_id" value="{{ $user_permission[0]['user_id'] }}">
						<button class="btn btn-primary btn-block" type="submit">Update</button>
						@else
							<button class="btn btn-primary btn-block" type="submit">Create</button>
						@endif



					</div>
				</form>

			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection