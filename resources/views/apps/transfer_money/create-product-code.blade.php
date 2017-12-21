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
			<h3 class="signup-heading">Create New Product Code</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('create-product-code') }}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="number" name="schemecode" spellcheck="false"
								       data-msg-required="Please enter scheme code." required>
								<label class="md-control-label">Scheme Code</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
								<label class="md-form-control" for="form-control-21">Transfer Type</label>
								<select id="form-control-21" name="transfertype" class="custom-select">
									<option value="NEFT">NEFT</option>
									<option value="RTGS">RTGS</option>
									<option value="IFT">IFT</option>
									<option value="IMPS">IMPS</option>
								</select>
							</div>
							</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="md-form-group">
								<label class="md-form-control" for="form-control-22">Validation At</label>
								<select class="custom-select" id="form-control-22" name="validation_at" data-msg-required="Please indicate product code status." required>
									<option value="C" selected="selected">Credit</option>
									<option value="D">Debit</option>
								</select>
							</div>
						</div>
					</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="md-form-group">
										<label class="md-form-control" for="form-control-22">Status</label>
										<select class="custom-select" id="form-control-22" name="status" data-msg-required="Please indicate product code status." required>
												<option value="1" selected="selected">Active</option>
												<option value="0">Inactive</option>
										</select>
									</div>
								</div>
							</div>

					<button class="btn btn-primary btn-block" type="submit">Create</button>
				</form>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection