@extends('master')
@section('custom-includes')
<script>
	function  validate_form() {
        var TCode = document.getElementById('customer_id').value;
		var validate = true;
        if( /[ !$%!^*@*(#()#(&#^]/.test( TCode ) ) {
            alert('Input is not alphanumeric');
            return false;
        }
        return true;
    }
</script>
@endsection
@section('content')
	<div class="signup">
		<div class="signup-body">
			<h3 class="signup-heading">Create New Customer</h3>
			<div class="signup-form">
				<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('create-customer') }}" method="post" onsubmit="return validate_form();">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" name="app_id" spellcheck="false"
								       data-msg-required="Please enter application ID." required>
								<label class="md-control-label">Application ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" type="text" id="customer_name" name="name" spellcheck="false"
								       data-msg-required="Please enter your name." required>
								<label class="md-control-label">Name</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="md-form-group md-label-floating">
								<input class="md-form-control" id="customer_id" type="text" name="customer_id" spellcheck="false"
								       data-msg-required="Please enter your customer ID." required>
								<label class="md-control-label">Customer ID</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_neft">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow NEFT</span>
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_rtgs">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow RTGS</span>
								</label>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="allow_imps">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Allow IMPS</span>
								</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">
								<label class="custom-control custom-control-primary custom-checkbox">
									<input class="custom-control-input" type="checkbox" name="enabled">
									<span class="custom-control-indicator"></span>
									<span class="custom-control-label" style="font-size: 16px;">Enabled</span>
								</label>
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