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
				<h3 class="m-b-0">List of Customers</h3>
			</div>
			<div class="col-xs-12">
				<div class="card">
					<div class="card-body">
						<div class="table-flip-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Customer ID</th>
										@if(Session::get('maker') == 1)
											<th>Edit Customer</th>
										@endif
									</tr>
								</thead>
								<tbody>
									@foreach($data['customers'] as $key => $value)
										<tr>
											<td>{{ $value['id'] }}</td>
											<td>{{ $value['name'] }}</td>
											<td>{{ $value['customer_id'] }}</td>
											@if(Session::get('maker') == 1)
												<td>
													<a href="{{ URL::to('customer/edit') . '/' . $value['id'] }}">Edit</a>
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