@extends('master')
@section('custom-includes')

@endsection
@section('content')
	<style>
		.md-form-control {
			border-style: none;
		}
	</style>
	<div class="layout-content-body">
		<div class="title-bar">
			<h1 class="title-bar-title" style="">
				<span class="d-ib">Update Product Code</span>
				</span>
			</h1>
		</div>
		<div class="row" style="margin-top: 50px;">
			<div class="col-md-8">
				<div class="demo-form-wrapper">
					<form class="form form-horizontal" style="margin-bottom: 50px;" action="{{ URL::to('update-product-code') }}" method="post">
						{{ csrf_field() }}
						<input type="hidden" value="{{ $data['productcodes']['id'] }}" name="id">
						<div class="form-group">
							<label class="col-sm-3 control-label" for="form-control-23">Scheme Code</label>
							<div class="col-sm-9">
								<select id="form-control-23" class="form-control" name="schemecode" >
									<option value="NRI" @if($data['productcodes']['schemecode'] == 'NRI') selected="selected" @endif>NRI</option>
									<option value="NRO" @if($data['productcodes']['schemecode'] == 'NRO') selected="selected" @endif>NRO</option>
									<option value="SBO" @if($data['productcodes']['schemecode'] == 'SBO') selected="selected" @endif>SBO</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="form-control-21">Transfer Type</label>
							<div class="col-sm-9">
								<select id="form-control-21" class="form-control" name="transfertype" >
									<option value="NEFT" @if($data['productcodes']['transfertype'] == 'NEFT') selected="selected" @endif>NEFT</option>
									<option value="RTGS" @if($data['productcodes']['transfertype'] == 'RTGS') selected="selected" @endif>RTGS</option>
									<option value="IFT" @if($data['productcodes']['transfertype'] == 'IFT') selected="selected" @endif>IFT</option>
									<option value="IMPS" @if($data['productcodes']['transfertype'] == 'IMPS') selected="selected" @endif>IMPS</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label" for="form-control-22">Validation At</label>
							<div class="col-sm-9">
								<select class="form-control" id="form-control-22" name="validation"
										data-msg-required="Please indicate product code status." required>
									<option value="C" @if($data['productcodes']['validation'] == 'C') selected="selected" @endif>Credit</option>
									<option value="D" @if($data['productcodes']['validation'] == 'D') selected="selected" @endif>Debit</option>
								</select>
							</div>
						</div>
						{{--<div class="form-group">--}}
							{{--<label class="col-sm-3 control-label" for="form-control-22">Status</label>--}}
							{{--<div class="col-sm-9">--}}
								{{--<select class="form-control" id="form-control-22" name="status"--}}
										{{--data-msg-required="Please indicate product code status." required>--}}
									{{--@if($data['productcodes']['status'] == 1)--}}
										{{--<option value="{{ $data['productcodes']['status'] }}" selected="selected">Active</option>--}}
										{{--<option value="0">Inactive</option>--}}
									{{--@else--}}
										{{--<option value="1">Active</option>--}}
										{{--<option value="{{ $data['productcodes']['status'] }}" selected="selected">Inactive</option>--}}
									{{--@endif--}}
								{{--</select>--}}
							{{--</div>--}}
						{{--</div>--}}
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