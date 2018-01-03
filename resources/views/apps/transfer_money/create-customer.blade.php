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
	{{--<div class="signup">--}}
		{{--<div class="signup-body" style="margin-bottom: 45px;">--}}
			{{--<h3 class="signup-heading">Create New Customer</h3>--}}
			{{--<div class="signup-form">--}}
				{{--<form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}' action="{{ URL::to('create-customer') }}" method="post" onsubmit="return validate_form();">--}}
					{{--{{ csrf_field() }}--}}
					{{--<div class="row">--}}
						{{--<div class="col-sm-12">--}}
							{{--<div class="form-group ">--}}
								{{--<label >Application ID</label>--}}
								{{--<input class="form-control" type="text" name="app_id" spellcheck="false"--}}
								       {{--placeholder="Application ID" required @if(isset($customer['app_id'])) value="{{ $customer['app_id'] }}" @endif>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="row">--}}
						{{--<div class="col-sm-12">--}}
							{{--<div class="form-group">--}}
								{{--<label >Name</label>--}}
								{{--<input class="form-control" type="text" id="customer_name" name="name" spellcheck="false"--}}
								       {{--placeholder="Name" required @if(isset($customer['name'])) value="{{ $customer['name'] }}" @endif>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="row">--}}
						{{--<div class="col-sm-12">--}}
							{{--<div class="form-group">--}}
								{{--<label >Customer ID</label>--}}
								{{--<input class="form-control" id="customer_id" type="text" name="customer_id" spellcheck="false"--}}
								       {{--placeholder="Customer ID" required>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="row">--}}
						{{--<div class="col-sm-4">--}}
							{{--<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">--}}
								{{--<label class="custom-control custom-control-primary custom-checkbox">--}}
									{{--<input class="custom-control-input" type="checkbox" name="allow_neft" @if(isset($customer['allow_neft'])) checked @endif>--}}
									{{--<span class="custom-control-indicator"></span>--}}
									{{--<span class="custom-control-label" style="font-size: 16px;">Allow NEFT</span>--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-sm-4">--}}
							{{--<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">--}}
								{{--<label class="custom-control custom-control-primary custom-checkbox">--}}
									{{--<input class="custom-control-input" type="checkbox" name="allow_rtgs" @if(isset($customer['allow_rtgs'])) checked @endif>--}}
									{{--<span class="custom-control-indicator"></span>--}}
									{{--<span class="custom-control-label" style="font-size: 16px;">Allow RTGS</span>--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="col-sm-4">--}}
							{{--<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">--}}
								{{--<label class="custom-control custom-control-primary custom-checkbox">--}}
									{{--<input class="custom-control-input" type="checkbox" name="allow_imps" @if(isset($customer['allow_imps'])) checked @endif>--}}
									{{--<span class="custom-control-indicator"></span>--}}
									{{--<span class="custom-control-label" style="font-size: 16px;">Allow IMPS</span>--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<div class="row">--}}
						{{--<div class="col-sm-4">--}}
							{{--<div class="custom-controls-stacked m-t" style="margin-bottom: 20px; padding: 20px 0; position: relative;">--}}
								{{--<label class="custom-control custom-control-primary custom-checkbox">--}}
									{{--<input class="custom-control-input" type="checkbox" name="enabled" @if(isset($customer['enabled'])) checked @endif>--}}
									{{--<span class="custom-control-indicator"></span>--}}
									{{--<span class="custom-control-label" style="font-size: 16px;">Enabled</span>--}}
								{{--</label>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}
					{{--<button class="btn btn-primary btn-block" type="submit">Create</button>--}}
				{{--</form>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title" style="">
				<span class="d-ib">Create New Customer</span>
              </span>
			</h1>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8">
				<div class="demo-form-wrapper">
					<form class="form form-horizontal" action="{{ URL::to('create-customer') }}" method="post" onsubmit="return validate_form();" style="margin-bottom: 50px;">
						{{ csrf_field() }}
						<div class="form-group">
							<label class="col-sm-3 control-label" >Application ID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" name="app_id" placeholder="Application ID" spellcheck="false" required @if(isset($customer['app_id'])) value="{{ $customer['app_id'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Customer Name</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="customer_name" name="name" spellcheck="false"
									   placeholder="Customer Name" required @if(isset($customer['name'])) value="{{ $customer['name'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Customer ID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="customer_id" name="customer_id" spellcheck="false"
									   placeholder="Customer ID" required>
							</div>
						</div>
						{{--<div class="form-group">--}}
							{{--<label class="col-sm-3 control-label" for="form-control-6">Select</label>--}}
							{{--<div class="col-sm-9">--}}
								{{--<select id="form-control-6" class="form-control">--}}
									{{--<option value="c-plus-plus">C++</option>--}}
									{{--<option value="css">CSS</option>--}}
									{{--<option value="java">Java</option>--}}
									{{--<option value="javascript">JavaScript</option>--}}
									{{--<option value="php">PHP</option>--}}
									{{--<option value="python">Python</option>--}}
									{{--<option value="ruby">Ruby</option>--}}
								{{--</select>--}}
							{{--</div>--}}
						{{--</div>--}}
						<div class="form-group">
							<label class="col-sm-3 control-label">Options</label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_neft" @if(isset($customer['allow_neft'])) checked @endif>Allow NEFT
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_rtgs" @if(isset($customer['allow_rtgs'])) checked @endif>Allow RTGS
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="allow_imps" @if(isset($customer['allow_imps'])) checked @endif>Allow IMPS
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label"></label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="enabled" @if(isset($customer['enabled'])) checked @endif>Enabled
									</label>
								</div>
							</div>
						</div>
						<div style="margin-top: 50px;display: flex;justify-content: flex-end;">
							<button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Create</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom-script')
	@include('layouts/partials/script')
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
@endsection