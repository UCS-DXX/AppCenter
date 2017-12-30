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
									@foreach($data['customers'] as $key => $value)
										<tr>
											<td>{{ $value['id'] }}</td>
											<td>{{ $value['app_id'] }}</td>
											<td>{{ $value['name'] }}</td>
											<td>{{ $value['customer_id'] }}</td>
											<td>{{ $value['allow_neft'] }}</td>
											<td>{{ $value['allow_rtgs'] }}</td>
											<td>{{ $value['allow_imps'] }}</td>
											<td>{{ $value['enabled'] }}</td>
											<td>{{ $value['revision_status'] }}</td>
											@if(Session::get('checker') == 1)
												<td>
													<a href="{{ URL::to('activate-customers') . '/' . $value['customer_id'].'/'.$value['id'] }}">Approve</a>
													&nbsp;&nbsp;
													<a href="{{ URL::to('reject-customers') . '/'.$value['id'] }}">Reject</a>
												</td>
											@endif
										</tr>
									@endforeach
								</tbody>
							</table>
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
	<script src="{{ asset('assets/js/demo.min.js') }}"></script>
@endsection