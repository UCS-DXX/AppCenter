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
                <span class="d-ib">Create Scheme Code</span>
                </span>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
                    <form class="form form-horizontal" style="margin-bottom: 50px;"
                          action="{{ URL::to('create-product-code') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-23">Scheme Code</label>
                            <div class="col-sm-9">
                                <select id="form-control-23" class="form-control" name="schemecode">
                                    @foreach ($schm_codes as $code=>$des)
                                        @php($description = $code." - ".$des)
                                        <option value="{{ $code }}" @if($product_code['schemecode']==$code){{ 'selected' }}@endif>
                                            {{$description}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-21">Transfer Type</label>
                            <div class="col-sm-9">
                                <select id="form-control-21" class="form-control" name="transfertype">
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
                            <label class="col-sm-3 control-label" for="form-control-22">Validation</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="form-control-22" name="validation"
                                        data-msg-required="Please indicate scheme code status." required>
                                    <option value="C" @if($product_code['validation']=='C'){{ 'selected' }}@endif>
                                        Credit
                                    </option>
                                    <option value="D" @if($product_code['validation']=='D'){{ 'selected' }}@endif>
                                        Debit
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-22">Enable</label>
                            <div class="col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="enable"
                                               value="Y" @if(!empty($product_code['enable']) && $product_code['enable']=='Y'){{ 'checked' }}@endif>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 50px;display: flex;justify-content: flex-end;">
                            <button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Create
                            </button>
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