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
	</style>
	<div class="layout-content-body">
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
										<th>ID</th>
										<th>Application ID</th>
										<th>Name</th>
										<th>Customer ID</th>
										<th>Allow NEFT</th>
										<th>Allow RTGS</th>
										<th>Allow IMPS</th>
										<th>Enabled</th>
										<th>Revision Status</th>
										@if(Session::get('checker') == 1)
											<th>Actions</th>
										@endif
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
											<td>{{ $customer->revision_status }}</td>
											@if(Session::get('checker') == 1)
												<td>
													<a href="{{ URL::to('activate-customers') . '/' . $customer->customer_id.'/'.$customer->id }}">Approve</a>
													&nbsp;&nbsp;
													<a href="{{ URL::to('reject-customers') . '/'.$customer->id }}">Reject</a>
												</td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						{{ $customers->links() }}
					</div>
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