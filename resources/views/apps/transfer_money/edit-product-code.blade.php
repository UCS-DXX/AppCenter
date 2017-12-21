@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<style>
		.md-form-control {
			border-style: none;
		}
	</style>
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
								       data-msg-required="Please enter scheme code." required >
								<label class="md-control-label">Scheme Code</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
							<label class="md-form-control" for="form-control-21">Transfer Type</label>
								<select id="form-control-21" name="transfertype" class="custom-select">
									<option value="NEFT" @if($data['productcodes']['transfertype'] == 'NEFT') selected="selected" @endif>NEFT</option>
									<option value="RTGS" @if($data['productcodes']['transfertype'] == 'RTGS') selected="selected" @endif>RTGS</option>
									<option value="IFT" @if($data['productcodes']['transfertype'] == 'IFT') selected="selected" @endif>IFT</option>
									<option value="IMPS" @if($data['productcodes']['transfertype'] == 'IMPS') selected="selected" @endif>IMPS</option>
								</select>
							</div>
							</div>
						</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
								<label class="md-form-control" for="form-control-22">Validation At</label>
								<select class="custom-select" id="form-control-22" name="validation_at" data-msg-required="Please indicate product code status." required>
									<option value="C" @if($data['productcodes']['validation_at'] == 'C') selected="selected" @endif>Credit</option>
									<option value="D" @if($data['productcodes']['validation_at'] == 'D') selected="selected" @endif>Debit</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
								<label class="md-form-control" for="form-control-22">Status</label>
								<select class="custom-select" id="form-control-22" name="status" data-msg-required="Please indicate product code status." required>
									@if($data['productcodes']['status'] == 1)
										<option value="{{ $data['productcodes']['status'] }}" selected="selected">Active</option>
										<option value="0">Inactive</option>
									@else
										<option value="1">Active</option>
										<option value="{{ $data['productcodes']['status'] }}" selected="selected">Inactive</option>
									@endif
								</select>
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