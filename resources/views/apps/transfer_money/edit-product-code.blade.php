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
                <span class="d-ib">Update Scheme Code</span>
                </span>
            </h1>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-8">
                <div class="demo-form-wrapper">
                    <form class="form form-horizontal" style="margin-bottom: 50px;"
                          action="{{ URL::to('update-product-code') }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $data['productcodes']['id'] }}" name="id">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-23">Scheme Code</label>
                            <div class="col-sm-9">
                                <select id="form-control-23" class="form-control" name="schemecode">
                                    @foreach ($data['schm_codes'] as $code=>$des)
                                        @php($description = $code." - ".$des)
                                        <option value="{{ $code }}" @if($data['productcodes']['schemecode'] == $code) selected="selected" @endif>{{$description}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-21">Transfer Type</label>
                            <div class="col-sm-9">
                                <select id="form-control-21" class="form-control" name="transfertype">
                                    <option value="NEFT"
                                            @if($data['productcodes']['transfertype'] == 'NEFT') selected="selected" @endif>
                                        NEFT
                                    </option>
                                    <option value="RTGS"
                                            @if($data['productcodes']['transfertype'] == 'RTGS') selected="selected" @endif>
                                        RTGS
                                    </option>
                                    <option value="IFT"
                                            @if($data['productcodes']['transfertype'] == 'IFT') selected="selected" @endif>
                                        IFT
                                    </option>
                                    <option value="IMPS"
                                            @if($data['productcodes']['transfertype'] == 'IMPS') selected="selected" @endif>
                                        IMPS
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="form-control-22">Validation At</label>
                            <div class="col-sm-9">
                                <select class="form-control" id="form-control-22" name="validation"
                                        data-msg-required="Please indicate product code status." required>
                                    <option value="C"
                                            @if($data['productcodes']['validation'] == 'C') selected="selected" @endif>
                                        Credit
                                    </option>
                                    <option value="D"
                                            @if($data['productcodes']['validation'] == 'D') selected="selected" @endif>
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
                                               value="Y" @if($data['productcodes']['enable']=='Y'){{ 'checked' }}@endif >
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 50px;display: flex;justify-content: flex-end;">
                            <button class="btn btn-primary btn-block" type="submit" style="max-width: 160px;">Update
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