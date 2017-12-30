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
                <form data-toggle="md-validator" data-groups='{"birthdate": "birth_month birth_day birth_year"}'
                      action="{{ URL::to('create-product-code') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group">
                                <label class="md-form-control" for="form-control-23">Scheme Code</label>
                                <select id="form-control-23" name="schemecode" class="custom-select">
                                    <option value="NRI" @if($product_code['schemecode']=='NRI'){{ 'selected' }}@endif>
                                        NRI
                                    </option>
                                    <option value="NRO" @if($product_code['schemecode']=='NRO'){{ 'selected' }}@endif>
                                        NRO
                                    </option>
                                    <option value="SBO" @if($product_code['schemecode']=='SBO'){{ 'selected' }}@endif>
                                        SBO
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group">
                                <label class="md-form-control" for="form-control-21">Transfer Type</label>
                                <select id="form-control-21" name="transfertype" class="custom-select">
                                    <option value="NEFT" @if($product_code['transfertype']=='NEFT'){{ 'selected' }}@endif>
                                        NEFT
                                    </option>
                                    <option value="RTGS" @if($product_code['transfertype']=='RTGS'){{ 'selected' }}@endif>
                                        RTGS
                                    </option>
                                    <option value="IFT" @if($product_code['transfertype']=='IFT'){{ 'selected' }}@endif>
                                        IFT
                                    </option>
                                    <option value="IMPS" @if($product_code['transfertype']=='IMPS'){{ 'selected' }}@endif>
                                        IMPS
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group">
                                <label class="md-form-control" for="form-control-22">Validation At</label>
                                <select class="custom-select" id="form-control-22" name="validation_at"
                                        data-msg-required="Please indicate product code status." required>
                                    <option value="C" @if($product_code['validation_at']=='C'){{ 'selected' }}@endif>
                                        Credit
                                    </option>
                                    <option value="D" @if($product_code['validation_at']=='D'){{ 'selected' }}@endif>
                                        Debit
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="md-form-group">
                                <label class="md-form-control" for="form-control-22">Status</label>
                                <select class="custom-select" id="form-control-22" name="status"
                                        data-msg-required="Please indicate product code status." required>
                                    <option value="1" @if($product_code['status']=='1'){{ 'selected' }}@endif >Active
                                    </option>
                                    <option value="0" @if($product_code['status']=='0'){{ 'selected' }}@endif>Inactive
                                    </option>
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