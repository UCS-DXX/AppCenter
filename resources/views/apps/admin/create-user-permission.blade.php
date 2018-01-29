@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title" style="">
				<span class="d-ib">Create New User</span>
				</span>
			</h1>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8">
				<div class="demo-form-wrapper">
					<form class="form form-horizontal" action="{{ URL::to('admin/create-user-permission') }}" method="post" style="margin-bottom: 50px;">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-sm-3 control-label" >Username</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="username" spellcheck="false" data-msg-required="Please enter username." required @if(isset($user_permission[0]['user_id'])) readonly value="{{ $user_permission[0]['user_id'] }}"  @elseif(isset($user_permission[0]['username'])) value="{{ $user_permission[0]['username'] }}" @endif >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Application Name</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="application_name" spellcheck="false" data-msg-required="Please enter username." required @if(isset($user_permission[0])) value="{{ $user_permission[0]['application_name'] }}" @elseif(old('user_id') != '') value="{{ old('user_id') }}" @endif >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Permission</label>
							<div class="col-sm-9">
								<div class="radio">
									<label>
										<input type="radio" name="permission" value="viewer" required
											   @if(isset($user_permission[0]['viewer']) && $user_permission[0]['viewer'] == 1 ) checked="checked" @elseif(isset($user_permission[0]['permission']) && $user_permission[0]['permission'] == 'viewer')  checked="checked" @endif> Viewer
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="permission" value="maker" required
											   @if(isset($user_permission[0]['maker']) && $user_permission[0]['maker'] == 1 )checked="checked" @elseif(isset($user_permission[0]['permission']) && $user_permission[0]['permission'] == 'maker')  checked="checked" @endif> Maker
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="permission" value="checker" required
											   @if(isset($user_permission[0]['checker']) && $user_permission[0]['checker'] == 1 )checked="checked" @elseif(isset($user_permission[0]['permission']) && $user_permission[0]['permission'] == 'checker')  checked="checked" @endif> Checker
									</label>
								</div>
							</div>
						</div>
						<div style="margin-top: 50px;display: flex;justify-content: flex-end;">
							@if(isset($user_permission[0]['user_id']))
								<input type="hidden" name="user_id" value="{{ $user_permission[0]['user_id'] }}">
								<button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Update</button>
							@else
								<button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Create</button>
							@endif
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