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
		<div class="row">
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
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $data['customers']['id'] }}</td>
										<td>{{ $data['customers']['app_id'] }}</td>
										<td>{{ $data['customers']['name'] }}</td>
										<td>{{ $data['customers']['customer_id'] }}</td>
										<td>{{ $data['customers']['allow_neft'] }}</td>
										<td>{{ $data['customers']['allow_rtgs'] }}</td>
										<td>{{ $data['customers']['allow_imps'] }}</td>
										<td>{{ $data['customers']['enabled'] }}</td>
									</tr>
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