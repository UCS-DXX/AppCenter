@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<style>
		#create_customer:link {
			padding: 8px;
			text-align: center;
			display: inline-block;
			border: 2px solid;
		}
		.title-bar-title {
			font-size: 16px;
		}
		.card {
			max-width: 100%;
			overflow-x: auto;
		}
	</style>
	<div class="layout-content-body">
		<div class="row">
			<div class="text-center m-b">
				<h3 class="m-b-0">List of Transactions</h3>
			</div>
			<div class="col-xs-12">
				<div class="card">
					<div class="card-body">
						<form data-toggle="md-validator" method="get" action="{{ url('/transactions') }}">
							<div class="row">
								<div class="col-sm-4">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="acc_no" spellcheck="false"
											   data-msg-required="Please enter Beneficiary account no." value="{{ app('request')->input('acc_no') }}">
										<label class="md-control-label">BENEFICIARY ACCOUNT NO</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="status" spellcheck="false"
											   data-msg-required="Please enter status" value="{{ app('request')->input('status') }}">
										<label class="md-control-label">STATUS</label>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="md-form-group md-label-floating" style="display:flex; flex-direction: row; justify-content: space-around">
										<button class="btn btn-primary" type="submit">Filter</button>
										<a class="btn btn-primary" href="{{ url('/transactions') }}">Reset</a>
									</div>
								</div>
							</div>
						</form>
						<div class="table-flip-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>SHOW LINK</th>
										{{--<th>ID</th>
										<th>REQ NO</th>
										<th>REQ VERSION</th>
										<th>REQ TIMESTAMP</th>
										<th>CUSTOMER ID</th>
										<th>DEBIT ACCOUNT NO</th>
										<th>BENE CODE</th>--}}
										<th>BENEFICIARY FULL NAME</th>
										{{--<th>BENE ADDRESS1</th>
										<th>BENE ADDRESS2</th>
										<th>BENE ADDRESS3</th>
										<th>BENE POSTAL CODE</th>
										<th>BENE CITY</th>
										<th>BENE STATE</th>
										<th>BENE COUNTRY</th>
										<th>BENE CONTACT EMAIL ID</th>
										<th>BENE CONTACT MOBILE NO</th>--}}
										<th>BENEFICIARY ACCOUNT NO</th>
										<th>BENEFICIARY ACCOUNT IFSC</th>
										{{--<th>BENE ACCOUNT MOBILE NO</th>
										<th>BENE ACCOUNT MMID</th>
										<th>TRANSFER TYPE</th>--}}
										<th>REMITTER NAME</th>
										<th>TRANSFER DATE</th>
										<th>TRANSFER AMOUNT</th>
										{{--<th>TRANSFER CCY</th>
										<th>RMTR TO BENE NOTE</th>--}}
										<th>STATUS</th>
										{{--<th>BANK REF</th>
										<th>REP NO</th>
										<th>REP VERSION</th>
										<th>REP TIMESTAMP</th>
										<th>ATTEMPT NO</th>
										<th>FAULT CODE</th>
										<th>FAULT REASON</th>
										<th>REQ TRANSFER TYPE</th>
										<th>SERVICE ID</th>
										<th>RECONCILED AT</th>
										<th>CBS REQ REF NO</th>
										<th>APP ID</th>
										<th>SUB CODE</th>
										<th>NAME WITH BENE BANK</th>
										<th>NOTIFY STATUS</th>
										<th>NOTIFY ATTEMPT NO</th>
										<th>NOTIFY ATTEMPT AT</th>
										<th>NOTIFIED AT</th>
										<th>NOTIFY RESULT</th>
										<th>AADHAAR NO</th>
										<th>AADHAAR MOBILE NO</th>
										<th>BENE BANK NAME</th>
										<th>PURPOSE CODE</th>--}}
									</tr>
								</thead>
								<tbody>
									@foreach($transactions as $transaction)
										<tr>
											<td>
												<a href="#">Show</a>
											</td>
											{{--<td>{{ $value['id'] }}</td>
											<td>{{ $value['req_no'] }}</td>
											<td>{{ $value['req_version'] }}</td>
											<td>{{ $value['req_timestamp'] }}</td>
											<td>{{ $value['customer_id'] }}</td>
											<td>{{ $value['debit_account_no'] }}</td>
											<td>{{ $value['bene_code'] }}</td>--}}
											<td>{{ $transaction->bene_full_name }}</td>
											{{--<td>{{ $value['bene_address1'] }}</td>
											<td>{{ $value['bene_address2'] }}</td>
											<td>{{ $value['bene_address3'] }}</td>
											<td>{{ $value['bene_postal_code'] }}</td>
											<td>{{ $value['bene_city'] }}</td>
											<td>{{ $value['bene_state'] }}</td>
											<td>{{ $value['bene_country'] }}</td>
											<td>{{ $value['bene_contact_email_id'] }}</td>
											<td>{{ $value['bene_contact_mobile_no'] }}</td>--}}
											<td>{{ $transaction->bene_account_no }}</td>
											<td>{{ $transaction->bene_account_ifsc }}</td>
											{{--<td>{{ $value['bene_account_mobile_no'] }}</td>
											<td>{{ $value['bene_account_mmid'] }}</td>
											<td>{{ $value['transfer_type'] }}</td>--}}
											<td></td>
											<td></td>
											<td>{{ $transaction->transfer_amount }}</td>
											{{--<td>{{ $value['transfer_ccy'] }}</td>
											<td>{{ $value['rmtr_to_bene_note'] }}</td>--}}
											<td>{{ $transaction->status_code }}</td>
											{{--<td>{{ $value['bank_ref'] }}</td>
											<td>{{ $value['rep_no'] }}</td>
											<td>{{ $value['rep_version'] }}</td>
											<td>{{ $value['rep_timestamp'] }}</td>
											<td>{{ $value['attempt_no'] }}</td>
											<td>{{ $value['fault_code'] }}</td>
											<td>{{ $value['fault_reason'] }}</td>
											<td>{{ $value['req_transfer_type'] }}</td>
											<td>{{ $value['service_id'] }}</td>
											<td>{{ $value['reconciled_at'] }}</td>
											<td>{{ $value['cbs_req_ref_no'] }}</td>
											<td>{{ $value['app_id'] }}</td>
											<td>{{ $value['sub_code'] }}</td>
											<td>{{ $value['name_with_bene_bank'] }}</td>
											<td>{{ $value['notify_status'] }}</td>
											<td>{{ $value['notify_attempt_no'] }}</td>
											<td>{{ $value['notify_attempt_at'] }}</td>
											<td>{{ $value['notified_at'] }}</td>
											<td>{{ $value['notify_result'] }}</td>
											<td>{{ $value['aadhaar_no'] }}</td>
											<td>{{ $value['aadhaar_mobile_no'] }}</td>
											<td>{{ $value['bene_bank_name'] }}</td>
											<td>{{ $value['purpose_code'] }}</td>--}}
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					{{ $transactions->links() }}
				</div>
			</div>
		</div>
	</div>

@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo.min.js') }}"></script>
@endsection