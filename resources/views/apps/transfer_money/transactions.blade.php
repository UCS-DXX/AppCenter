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
								<div class="col-sm-2">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="acc_no" spellcheck="false"
											   data-msg-required="Please enter Beneficiary account no." value="{{ app('request')->input('acc_no') }}">
										<label class="md-control-label">BENEFICIARY ACCOUNT NO</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="transfer_date" spellcheck="false"
											   data-msg-required="Please enter Transfer Date" value="{{ app('request')->input('transfer_date') }}">
										<label class="md-control-label">TRANSFER DATE</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="req_no" spellcheck="false"
											   data-msg-required="Please enter Request no." value="{{ app('request')->input('req_no') }}">
										<label class="md-control-label">REQUEST NO</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="bank_ref" spellcheck="false"
											   data-msg-required="Please enter Bank Reference" value="{{ app('request')->input('bank_ref') }}">
										<label class="md-control-label">BANK REFERENCE</label>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="md-form-group md-label-floating">
										<input class="md-form-control" type="text" name="status" spellcheck="false"
											   data-msg-required="Please enter status" value="{{ app('request')->input('status') }}">
										<label class="md-control-label">STATUS</label>
									</div>
								</div>
								<div class="col-sm-2">
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
										<th>BENEFICIARY FULL NAME</th>
										<th>BENEFICIARY ACCOUNT NO</th>
										<th>BENEFICIARY ACCOUNT IFSC</th>
										<th>REMITTER NAME</th>
										<th>TRANSFER DATE</th>
										<th>TRANSFER AMOUNT</th>
										<th>STATUS</th>
										<th>REQUEST NO.</th>
										<th>BANK REFERENCE</th>
									</tr>
								</thead>
								<tbody>
									@foreach($transactions as $transaction)
										<tr>
											<td>
												<a href="#">Show</a>
											</td>
											<td>{{ $transaction->bene_full_name }}</td>
											<td>{{ $transaction->bene_account_no }}</td>
											<td>{{ $transaction->bene_account_ifsc }}</td>
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