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
								<input class="md-form-control" type="text" value="{{ $data['customer']['app_id'] }}" name="app_id" spellcheck="false"
								       data-msg-required="Please enter your app ID.">
								<label class="md-control-label">App ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['name'] }}" name="name" spellcheck="false"
								       data-msg-required="Please enter your name." required>
								<label class="md-control-label">Name</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input readonly class="md-form-control" type="text" value="{{ $data['customer']['customer_id'] }}" name="customer_id" spellcheck="false"
								       data-msg-required="Please enter your customer ID." required>
								<label class="md-control-label">Customer ID</label>
							</div>
						</div>
					</div>
					{{--<div class="row">
						<div class="col-sm-6">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['low_balance_alert_at'] }}" name="low_balance_alert_at" spellcheck="false"
								       data-msg-required="Please enter low balance alert at.">
								<label class="md-control-label">Low Balance Alert At</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['identity_user_id'] }}" name="identity_user_id" spellcheck="false"
								       data-msg-required="Please enter identity user id.">
								<label class="md-control-label">Identity User Id</label>
							</div>
						</div>
					</div>--}}
					<div class="row">
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_neft" @if(isset($data['customer']['allow_neft']) AND $data['customer']['allow_neft'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow NEFT</span>
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_imps" @if(isset($data['customer']['allow_imps']) AND $data['customer']['allow_imps'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow IMPS</span>
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_rtgs" @if(isset($data['customer']['allow_rtgs']) AND $data['customer']['allow_rtgs'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow RTGS</span>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						{{--<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="string" @if(isset($data['customer']['string']) AND $data['customer']['string'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">String</span>
								</label>
							</div>
						</div>--}}
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="enabled" @if(isset($data['customer']['enabled']) AND $data['customer']['enabled'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Enabled</span>
								</label>
							</div>
						</div>
						{{--<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="is_retail" @if(isset($data['customer']['is_retail']) AND $data['customer']['is_retail'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Is Retail</span>
								</label>
							</div>
						</div>--}}
					</div>
					{{--<div class="row">
						<div class="col-sm-6">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['lock_version'] }}" name="lock_version" spellcheck="false"
								       data-msg-required="Please enter lock version.">
								<label class="md-control-label">Lock Version</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['approved_version'] }}" name="approved_version" spellcheck="false"
								       data-msg-required="Please enter approved version.">
								<label class="md-control-label">Approved Version</label>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['approved_id'] }}" name="approved_id" spellcheck="false"
								       data-msg-required="Please enter approved ID.">
								<label class="md-control-label">Approved ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-5">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['needs_purpose_code'] }}" name="needs_purpose_code" spellcheck="false"
								       data-msg-required="Please enter purpose code.">
								<label class="md-control-label">Needs Purpose Code</label>
							</div>
						</div>
						<div class="col-xs-7">
							<div class="md-form-group">
								<select class="md-form-control" name="reply_with_bene_name" data-msg-required="Reply With Bene Name.">
									<option value="" disabled="disabled" selected="selected">Reply With Bene Name</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
								<label class="md-control-label"></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-7">
							<div class="md-form-group">
								<select class="md-form-control" name="allow_all_accounts" data-msg-required="Allow All Accounts.">
									<option value="" disabled="disabled" selected="selected">Allow All Accounts</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
								<label class="md-control-label"></label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['notify_app_code'] }}" name="notify_app_code" spellcheck="false"
								       data-msg-required="Please enter purpose code.">
								<label class="md-control-label">Notify App Code</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="md-form-group">
								<select class="md-form-control" name="notify_on_status_change" data-msg-required="Notify On Status Change.">
									<option value="" disabled="disabled" selected="selected">Notify On Status Change</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
								<label class="md-control-label"></label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="md-form-group">
								<select class="md-form-control" name="is_filetoapi_allowed" data-msg-required="Is Filetoapi Allowed.">
									<option value="" disabled="disabled" selected="selected">Is Filetoapi Allowed</option>
									<option value="Y">Yes</option>
									<option value="N">No</option>
								</select>
								<label class="md-control-label"></label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_apbs" @if(isset($data['customer']['allow_apbs']) AND $data['customer']['allow_apbs'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow APBS</span>
								</label>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['customer']['apbs_user_no'] }}" name="apbs_user_no" spellcheck="false"
								       data-msg-required="Please enter purpose code.">
								<label class="md-control-label">APBS User No</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allowed_relns" @if(isset($data['customer']['allowed_relns']) AND $data['customer']['allowed_relns'] != null) checked="checked" @endif>
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allowed Relns</span>
								</label>
							</div>
						</div>
					</div>--}}
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