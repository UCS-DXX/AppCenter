@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title" style="">
				<span class="d-ib">Create New Customer</span>
				</span>
			</h1>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8">
				<div class="demo-form-wrapper">
					<form class="form form-horizontal" action="{{ URL::to('update-customer') }}" method="post" style="margin-bottom: 50px;">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $data['customer']['id'] }}" name="id">
						<div class="form-group">
							<label class="col-sm-3 control-label" >Application ID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" value="{{ $data['customer']['app_id'] }}" name="app_id" placeholder="Application ID" spellcheck="false" required @if(isset($customer['app_id'])) value="{{ $customer['app_id'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Customer Name</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" value="{{ $data['customer']['name'] }}" id="customer_name" name="name" spellcheck="false"
									   placeholder="Customer Name" required @if(isset($customer['name'])) value="{{ $customer['name'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Customer ID</label>
							<div class="col-sm-9">
								<input readonly class="form-control" type="text" value="{{ $data['customer']['customer_id'] }}" id="customer_id" name="customer_id" spellcheck="false"
									   placeholder="Customer ID" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Options</label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_neft" @if(isset($data['customer']['allow_neft']) AND $data['customer']['allow_neft'] == 'Y') checked="checked" @endif >Allow NEFT
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_rtgs" @if(isset($data['customer']['allow_rtgs']) AND $data['customer']['allow_rtgs'] == 'Y') checked="checked" @endif >Allow RTGS
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_imps" @if(isset($data['customer']['allow_imps']) AND $data['customer']['allow_imps'] == 'Y') checked="checked" @endif >Allow IMPS
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="enabled" @if(isset($data['customer']['enabled']) AND $data['customer']['enabled'] == 'Y') checked="checked" @endif >Enabled
									</label>
								</div>
							</div>
						</div>
						<div style="margin-top: 50px;display: flex;justify-content: flex-end;">
							<button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Update</button>
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