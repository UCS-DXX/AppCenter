@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<h3 class="signup-heading">Edit Product Code</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('update-product-code') }}" method="post">
					{{ csrf_field() }}
					<input type="hidden" value="{{ $data['productcodes']['id'] }}" name="id">
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="number" value="{{ $data['productcodes']['schemecode'] }}" name="schemecode" spellcheck="false"
								       data-msg-required="Please enter scheme code." required>
								<label class="md-control-label">Scheme Code</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" value="{{ $data['productcodes']['transfertype'] }}" name="transfertype" spellcheck="false"
								       data-msg-required="Please enter transfer type." required>
								<label class="md-control-label">Transfer Type</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
								<select class="md-form-control" name="status" data-msg-required="Please indicate product code status." required>
									<option value="" disabled="disabled">Status</option>
									@if($data['productcodes']['status'] == 1)
										<option value="{{ $data['productcodes']['status'] }}" selected="selected">Active</option>
										<option value="0">Inactive</option>
									@else
										<option value="1">Active</option>
										<option value="{{ $data['productcodes']['status'] }}" selected="selected">Inactive</option>
									@endif
								</select>
								<label class="md-control-label"></label>
							</div>
						</div>
					</div>
					<button class="btn btn-primary btn-block" type="submit">Update</button>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection