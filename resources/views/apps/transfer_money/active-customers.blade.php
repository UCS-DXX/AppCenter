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
			<div class="col-xs-12">
				<div class="card">
					{{--<div class="card-header">
						<div class="card-actions">
							<button type="button" class="card-action card-toggler" title="Collapse"></button>
							<button type="button" class="card-action card-reload" title="Reload"></button>
							<button type="button" class="card-action card-remove" title="Remove"></button>
						</div>
						<strong>Flip Scroll</strong>
					</div>--}}
					<div class="card-body">
						<div class="table-flip-scroll">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Customer ID</th>
										@if(Session::get('checker') == 1)
											<th>Activate Customer</th>
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
													<a href="{{ URL::to('activate-customers') . '/' . $value['customer_id'] }}">Activate</a>
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