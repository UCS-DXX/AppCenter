@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup" style="max-width: 580px;">
		<div class="signup-body" style="margin-bottom: 45px;">
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
								<span class="custom-control-label" style="font-size: 16px;">Mobile No : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['mobile_no'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">MMID : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['mmid'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Identity ID : </span>
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
								<span class="custom-control-label" style="font-size: 16px;">Daily Limit : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['is_dailylimit'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Daily Limit Amount : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['daily_limit_amt'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Transaction Limit : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['is_transactionlimit'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Transaction Limit Amount : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['transaction_limit_amt'] }}</span>
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
								<span class="custom-control-label" style="font-size: 16px;">Created By : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['created_by'] }}</span>
							</label>
						</div>
					</div>
				</div>
				<div class="row" style="height: 50px;">
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">Updated By : </span>
							</label>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="custom-controls-stacked m-t">
							<label class="custom-control custom-control-primary custom-checkbox">
								<span class="custom-control-label" style="font-size: 16px;">{{ $data['customers']['updated_by'] }}</span>
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