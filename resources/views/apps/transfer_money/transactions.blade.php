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
			<form method="get" action="{{ url('/transactions') }}">
				<div class="container" style="margin: 0; padding-right: 20px;">
					<div class="row"style="padding-top: 20px; padding-bottom: 20px; margin: 10px" >
						<div class="col-sm-2">
							<div class="form-group">
								<label>BENEFICIARY ACC NO</label>
								<input class="form-control" type="text" name="acc_no" spellcheck="false" placeholder="Beneficiary account no." value="{{ app('request')->input('acc_no') }}">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label>TRANSFER DATE</label>
								<input class="form-control" type="text" name="transfer_date" spellcheck="false"
									   placeholder="Transfer Date" value="{{ app('request')->input('transfer_date') }}">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label>REQUEST NO</label>
								<input class="form-control" type="text" name="req_no" spellcheck="false"
									   placeholder="Request no." value="{{ app('request')->input('req_no') }}">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label>BANK REFERENCE</label>
								<input class="form-control" type="text" name="bank_ref" spellcheck="false"
									   placeholder="Bank Reference" value="{{ app('request')->input('bank_ref') }}">
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group">
								<label>Status</label>
								<select id="status" name="status" class="custom-select">
									<option value="" @if(app('request')->input('status') == "") {{ 'selected' }}@endif>
										All
									</option>
									<option value="SEND_TO_BENEFICIARY" @if(app('request')->input('status') == "SEND_TO_BENEFICIARY") {{ 'selected' }}@endif>
										SEND TO BENEFICIARY
									</option>
									<option value="INPROCESS" @if(app('request')->input('status') == "INPROCESS") {{ 'selected' }}@endif>
										IN PROCESS
									</option>
									<option value="SUCCESS" @if(app('request')->input('status') == "SUCCESS") {{ 'selected' }}@endif>
										SUCCESS
									</option>
									<option value="FAILED" @if(app('request')->input('status') == "FAILED") {{ 'selected' }}@endif>
										FAILED
									</option>
								</select>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="form-group" style="padding-top: 12px;">
								<button class="btn btn-primary" type="submit" style="margin-top: 10px;margin-right: 10px;">Filter</button>
								<a class="btn btn-primary" style="margin-top: 10px;margin-right: 10px;" href="{{ url('/transactions') }}">Reset</a>
							</div>
						</div>
					</div>
				</div>
			</form>
			<div class="col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="table-flip-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										{{--<th>SHOW LINK</th>--}}
										<th>BENE NAME</th>
										<th>BENE ACCOUNT</th>
										<th>REMITTER NAME</th>
										<th>DATE</th>
										<th>TRANSFER AMOUNT</th>
										<th>STATUS</th>
										<th>REQ NO</th>
										<th>BANK REF</th>
									</tr>
								</thead>
								<tbody>
									@foreach($transactions as $transaction)
										<tr>
											{{--<td>--}}
												{{--<a href="#">Show</a>--}}
											{{--</td>--}}
											<td>{{ $transaction->bene_full_name }}</td>
											<td>{{ $transaction->bene_account_no }}</td>
											<td></td>
											<td>{{ $transaction->transfer_date }}</td>
											<td>{{ $transaction->transfer_amount }}</td>
											<td>{{ $transaction->status_code }}</td>
											<td>{{ $transaction->req_no }}</td>
											<td>{{ $transaction->bank_ref }}</td>
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