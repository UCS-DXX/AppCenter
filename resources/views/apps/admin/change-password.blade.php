@extends('master')
@section('custom-includes')
@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title" style="">
				<span class="d-ib">Change Password</span>
				</span>
			</h1>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8">
				<div class="demo-form-wrapper">
					<form class="form form-horizontal" action="{{ URL::to('admin/change-password') }}" method="post" style="margin-bottom: 50px;">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-sm-3 control-label" >Old Password</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="old_password" spellcheck="false"
									   data-msg-required="Old Password" required >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >New Password</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="password" spellcheck="false"
									   data-msg-required="New Password" required >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Confirm Password</label>
							<div class="col-sm-9">
								<input class="form-control" type="password" name="password_confirmation" spellcheck="false"
									   data-msg-required="Confirm password" required >
							</div>
						</div>
						<div style="margin-top: 50px;display: flex;justify-content: flex-end;">
							<button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Change Password</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection