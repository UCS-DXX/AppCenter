@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<div class="signup-form">
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">ID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['id'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">App ID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['app_id'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Name : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['name'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Low Balance Alert At : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['low_balance_alert_at'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Identity User ID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['identity_user_id'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allow NEFT : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allow_neft'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allow IMPS : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allow_imps'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allow RTGS : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allow_rtgs'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">String : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['string'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Enabled : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['enabled'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Is retail : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['is_retail'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Customer ID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['customer_id'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Lock Version : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['lock_version'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Approval Status : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['approval_status'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Last Action : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['last_action'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Approved Version : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['approved_version'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Approved ID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['approved_id'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Needs Purpose Code : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['needs_purpose_code'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Reply With Bene Name : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['reply_with_bene_name'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allow All Accounts : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allow_all_accounts'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Notify App Code : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['notify_app_code'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Notify On Status Change : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['notify_on_status_change'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Is filetoapi allowed : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['is_filetoapi_allowed'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allow APBS : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allow_apbs'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">APBS User No : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['apbs_user_no'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Notification Sent At : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['notification_sent_at'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Allowed relns : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['allowed_relns'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Bene Backend : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['bene_backend'] }}</span>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection