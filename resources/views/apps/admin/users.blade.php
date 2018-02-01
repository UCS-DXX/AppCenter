@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title">
				<span class="d-ib">
					<a href="{{ URL::to('admin/create-user-permission') }}">Add New User</a>
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
										<th>Username</th>
										<th>Application Name</th>
										<th>Viewer</th>
										<th>Maker</th>
										<th>Checker</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>
									@foreach($user_permissions as $key => $value)
										<tr>
											<td>{{ $value['user_id'] }}</td>
											<td>{{ $value['application_name'] }}</td>
											<td>{{ $value['viewer'] }}</td>
											<td>{{ $value['maker'] }}</td>
											<td>{{ $value['checker'] }}</td>
											<td><a href="{{ URL::to('admin/create-user-permission') . '/' . $value['user_id'] }}">Edit</a></td>
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