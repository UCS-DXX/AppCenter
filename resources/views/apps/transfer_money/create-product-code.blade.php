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
                <span class="d-ib">Create Product Code</span>
                </span>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
                    <form class="form form-horizontal" style="margin-bottom: 50px;" action="{{ URL::to('create-product-code') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-23">Scheme Code</label>
                            <div class="col-sm-9">
                                <select id="form-control-23" class="form-control" name="schemecode" >
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
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-21">Transfer Type</label>
                            <div class="col-sm-9">
                                <select id="form-control-21" class="form-control" name="transfertype" >
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
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-22">Validation At</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="form-control-22" name="validation_at"
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
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-22">Status</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="form-control-22" name="status"
                                        data-msg-required="Please indicate product code status." required>
                                    <option value="1" @if($product_code['status']=='1'){{ 'selected' }}@endif >Active
                                    </option>
                                    <option value="0" @if($product_code['status']=='0'){{ 'selected' }}@endif>Inactive
                                    </option>
                                </select>
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