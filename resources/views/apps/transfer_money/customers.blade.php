@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title">
				<span class="d-ib">
					<a href="{{ URL::to('create-customer') }}">Add New Customer</a>
				</span>
			</h1>
		</div>
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
										<th>Edit Customer</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data['customers'] as $key => $value)
										<tr>
											<td>{{ $value['id'] }}</td>
											<td>{{ $value['name'] }}</td>
											<td><a href="{{ URL::to('/') }}">Edit</a></td>
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
@endsection