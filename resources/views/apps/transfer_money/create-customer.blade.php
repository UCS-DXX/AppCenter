@extends('master')
@section('custom-includes')
<script>
	function  validate_form() {
        var TCode = document.getElementById('customer_id').value;
        var mmid  = document.getElementById('mmid').value;
		var app_id = document.getElementById('app_id').value;
		var mobile_no = document.getElementById('mobile_no').value;
		var daily_limit_amt = document.getElementById('daily_limit_amt').value;
		var transaction_limit_amt = document.getElementById('transaction_limit_amt').value;
        var validate = true;
        var regX =  /^[a-z0-9]+$/;
        var regx2 = /^[A-Za-z]+$/;
        var regX3 = /^[0-9]*$/;
        if(!TCode.match(regX) ) {
            $("#error").css('display','block');
            $("#error").html("Customer is not alphanumeric");
            validate = false;
        }
        else if(TCode.length < 1 || TCode.length > 10) {
            $("#error").css('display','block');
            $("#error").html("Customer Id lenght should be > 1 and < 10");
            validate = false
		}
		else if(TCode.indexOf(' ') > -1) {
            $("#error").css('display','block');
            $("#error").html("Remove space from Customer Id");
            validate = false
		}
		else if(!app_id.match(regx2)) {
            $("#error").css('display','block');
            $("#error").html("Application Id should be only letters");
            validate = false;
		}
		else if(app_id.length < 5 || app_id.length > 20) {
            $("#error").css('display','block');
            $("#error").html("Application Id lenght should be > 5 and < 20");
			validate = false;
		}
        else if(!mmid.match(regX3)) {
            $("#error").css('display','block');
            $("#error").html("MMID accept only numbers");
            validate = false
        }
		else if(mmid.length != 7) {
            $("#error").css('display','block');
            $("#error").html("MMID lenght should be 7");
            validate = false
		}
        else if(!mobile_no.match(regX3)) {
            $("#error").css('display','block');
            $("#error").html("Mobile No accept only numbers");
            validate = false
        }
        else if(mobile_no.length > 10 || mobile_no.length < 10) {
            $("#error").css('display','block');
            $("#error").html("Mobile No Should be 10 digits only");
            validate = false
        }
        else if(!daily_limit_amt.match(regX3)) {
            $("#error").css('display','block');
            $("#error").html("Daily Limit Amount accept only numbers");
            validate = false
        }
        else if(!transaction_limit_amt.match(regX3)) {
            $("#error").css('display','block');
            $("#error").html("Transaction Limit Amount accept only numbers");
            validate = false
        }
        else if($("#is_dailylimit:checked").length > 0){
            if(parseInt(daily_limit_amt)<1 || parseInt(daily_limit_amt)>1000000000) {
                $("#error").css('display','block');
                $("#error").html("Daily Limit Should be from 1 - 1000000000");
                validate = false
            }
        }
        else if($("#is_transactionlimit:checked").length > 0){
            if(parseInt(transaction_limit_amt)<1 || parseInt(transaction_limit_amt)>1000000000) {
                $("#error").css('display', 'block');
                $("#error").html("Transaction Limit Should be from 1 - 1000000000");
                validate = false
            }
        }
		return validate;
    }
    $( document ).ready(function() {
        $("#is_dailylimit").click(function () {
			if(this.checked == true) {
                $("#daily_limit_amt").removeAttr("readonly");
			}
			else {
                $("#daily_limit_amt").attr("readonly","readonly");
				$("#daily_limit_amt").val(0);
			}
        });

        $("#is_transactionlimit").click(function () {
            if(this.checked == true) {
                $("#transaction_limit_amt").removeAttr("readonly")
            }
            else {
                $("#transaction_limit_amt").attr("readonly","readonly");
                $("#transaction_limit_amt").val(0);
            }
        })
    });
</script>

@endsection
@section('content')
	<div class="layout-content-body">
		<div class="alert alert-danger" id="error" style="display: none">

		</div>
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
								<input  class="form-control" type="text" id="app_id" name="app_id" placeholder="Application ID" spellcheck="false" required @if(isset($customer['app_id'])) value="{{ $customer['app_id'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >Customer ID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="customer_id" name="customer_id" spellcheck="false"
									   placeholder="Customer ID" required>
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
							<label class="col-sm-3 control-label" >Mobile Number</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="mobile_no" name="mobile_no" spellcheck="false"
									   placeholder="Mobile Number" minlength="10" maxlength="10" required @if(isset($customer['mobile_no'])) value="{{ $customer['mobile_no'] }}" @endif>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" >MMID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="mmid" name="mmid" spellcheck="false"
									   placeholder="MMID" minlength="7" maxlength="7" required @if(isset($customer['mmid'])) value="{{ $customer['mmid'] }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" >Identity ID</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="identity_user_id" name="identity_user_id" spellcheck="false"
									   placeholder="Identity ID" required @if(isset($customer['identity_user_id'])) value="{{ $customer['identity_user_id'] }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" >Email</label>
							<div class="col-sm-9">
								<input class="form-control" type="email" id="email" name="email" spellcheck="false"
									   placeholder="Email" required @if(isset($customer['email'])) value="{{ $customer['email'] }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" >Address</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="address" name="address" spellcheck="false"
									   placeholder="Address" required @if(isset($customer['address'])) value="{{ $customer['address'] }}" @endif>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Daily Limit</label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" id="is_dailylimit" name="is_dailylimit" @if(isset($customer['is_dailylimit'])) checked @endif>Daily Limit
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" >Daily Limit Amount</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="daily_limit_amt" name="daily_limit_amt" spellcheck="false"
									   placeholder="Daily Limit Amount" required @if(isset($customer['daily_limit_amt'])) value="{{ $customer['daily_limit_amt'] }}" @else value="0" @endif  readonly="readonly">
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Transaction Limit</label>
							<div class="col-sm-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" id="is_transactionlimit" name="is_transactionlimit" @if(isset($customer['is_transactionlimit'])) checked @endif>Transaction Limit
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label" >Transaction Limit Amount</label>
							<div class="col-sm-9">
								<input class="form-control" type="text" id="transaction_limit_amt" name="transaction_limit_amt" spellcheck="false"
									   placeholder="Transaction Limit Amount" required @if(isset($customer['transaction_limit_amt'])) value="{{ $customer['transaction_limit_amt'] }}" @else value="0" @endif readonly="readonly">
							</div>
						</div>


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