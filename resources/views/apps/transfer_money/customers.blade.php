@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<style>
		#create_customer:link {
			padding: 4px;
			text-align: center;
			display: inline-block;
			border: 2px solid;
			font-size: 14px;
		}
		.title-bar-title {
			font-size: 16px;
		}
	</style>
	<div class="layout-content-body">
		@if(Session::get('maker') == 1)
			<div class="title-bar">
				<h6 class="title-bar-title">
				<span class="d-ib">
					<a href="{{ URL::to('create-customer') }}" id="create_customer">Add New Customer</a>
				</span>
				</h6>
			</div>
		@endif
			<div class="row">
				<div class="text-center m-b">
					<h3 class="m-b-0">Approved Customers</h3>
				</div>
				<div class="col-xs-12">
					<form data-toggle="md-validator" method="get" action="{{ url('/customers') }}">
						<div class="row"  style="padding-top: 20px; padding-bottom: 20px;">
							<div class="col-sm-3">
								<div class="form-group">
									<label class="">Application ID</label>
									<input class="form-control" type="text" name="app_id" spellcheck="false"
										   placeholder="Application ID" value="{{ app('request')->input('app_id') }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label class="">Name</label>
									<input class="form-control" type="text" name="name" spellcheck="false"
										   placeholder="Name" value="{{ app('request')->input('name') }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label class="">Customer ID</label>
									<input class="form-control" type="text" name="customer_id" spellcheck="false"
										   placeholder="Customer ID" value="{{ app('request')->input('customer_id') }}">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group" style="display:flex; flex-direction: row; justify-content: flex-end; padding-top: 20px;">
									<button class="btn btn-primary" style="margin-right: 10px;" type="submit">Filter</button>
									<a class="btn btn-primary" style="margin-right: 10px;" href="{{ url('/customers') }}">Reset</a>
								</div>
							</div>
						</div>
					</form>
					<div class="card">
						<div class="card-body">
							<div class="table-flip-scroll">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>ID</th>
										<th>Application ID</th>
										<th>Name</th>
										<th>Customer ID</th>
										<th>Allow NEFT</th>
										<th>Allow RTGS</th>
										<th>Allow IMPS</th>
										<th>Enabled</th>
										@if(Session::get('maker') == 1)
											<th>Edit Customer</th>
										@endif
										<th>View Customer</th>
									</tr>
									</thead>
									<tbody>
									@foreach($customers as $customer)
										<tr>
											<td>{{ $customer->id }}</td>
											<td>{{ $customer->app_id }}</td>
											<td>{{ $customer->name }}</td>
											<td>{{ $customer->customer_id }}</td>
											<td>{{ $customer->allow_neft }}</td>
											<td>{{ $customer->allow_rtgs }}</td>
											<td>{{ $customer->allow_imps }}</td>
											<td>{{ $customer->enabled }}</td>
											@if(Session::get('maker') == 1)
												@php ($flag = 0)

												@foreach($data['checkUser'] as $key => $value)
													@if($value['customer_id'] == $customer->customer_id)
														@php ($flag = 1)
														@break
													@endif
												@endforeach

												@if($flag == 0)
													<td>
														<a href="{{ URL::to('customer/edit') . '/' . $customer->id }}">Edit</a>
													</td>
												@else
													<td>Approval Pending</td>
												@endif

											@endif
											<td>
												<a href="{{ URL::to('customer') . '/' . $customer->id }}">View</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						{{ $customers->links() }}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="text-center m-b">
					<h3 class="m-b-0">List of Pending Customers</h3>
				</div>
				<div class="col-xs-12">
					<div class="card">
						<div class="card-body">
							<div class="table-flip-scroll">
								<table class="table table-striped">
									<thead>
									<tr>
										<th>Application ID</th>
										<th>Name</th>
										<th>Customer ID</th>
										<th>Allow NEFT</th>
										<th>Allow RTGS</th>
										<th>Allow IMPS</th>
										<th>Enabled</th>
										<th>Revision Status</th>
									</tr>
									</thead>
									<tbody>
									@foreach($pendingCustomers as $pendingCustomer)
										<tr>
											<td>{{ $pendingCustomer->app_id }}</td>
											<td>{{ $pendingCustomer->name }}</td>
											<td>{{ $pendingCustomer->customer_id }}</td>
											<td>{{ $pendingCustomer->allow_neft }}</td>
											<td>{{ $pendingCustomer->allow_rtgs }}</td>
											<td>{{ $pendingCustomer->allow_imps }}</td>
											<td>{{ $pendingCustomer->enabled }}</td>
											<td>{{ $pendingCustomer->revision_status }}</td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
						</div>
						{{ $pendingCustomers->links() }}
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