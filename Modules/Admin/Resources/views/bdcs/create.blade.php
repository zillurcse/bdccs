@extends('layouts.master')
@section('css')
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">

            @include('components.breadcrumb', ['item' => ['/dashboard'=>env('APP_NAME'),'active'=>'BDCS CODE'],
            'pTitle' => $title])

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-xl-8">
                                </div>
                                <div class="col-xl-4">
                                    <div class="text-xl-end mt-xl-0 mt-2">
                                        <a href="{{route('bdcs-code.index')}}" class="btn btn-info mb-2 me-2" data-toggle="tooltip" title="BDCS CODE List"> <i class="mdi mdi-text me-1"></i>BDCS CODE Lists</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        {!! Form::open(array('route' => 'bdcs-code.store','method'=>'POST','class'=>'','files'=>true)) !!}

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>BDCS Code <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::text('code', $value=old('code'), array('placeholder' => 'code','class' => 'form-control','required'=>true,'id'=>'code')) !!}

                                                @if ($errors->has('code'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('code') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Business name <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::text('business_name', $value=old('business_name'), array('placeholder' => 'Business name','class' => 'form-control','required'=>true,'id'=>'business_name')) !!}

                                                @if ($errors->has('business_name'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('business_name') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Issue Date <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::date('issue_date', \Illuminate\Support\Carbon::now()->format('Y-m-d'), array('placeholder' => 'R.F Embassy','class' => 'form-control','required'=>true,'id'=>'issue_date')) !!}

                                                @if ($errors->has('issue_date'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('issue_date') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Expire Date <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::date('expire_date', \Illuminate\Support\Carbon::now()->addYear(), array('placeholder' => 'Submit Date','class' => 'form-control','required'=>true,'id'=>'expire_date')) !!}

                                                @if ($errors->has('expire_date'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('expire_date') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Name <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::text('seller_name', $value=old('seller_name'), array('placeholder' => 'Seller Name','class' => 'form-control','required'=>true,'id'=>'seller_name')) !!}

                                                @if ($errors->has('seller_name'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_name') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Address <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::textarea('seller_address', $value=old('seller_address'), array('placeholder' => 'Seller Address','class' => 'form-control','required'=>true,'id'=>'seller_address', 'rows'=>5)) !!}

                                                @if ($errors->has('seller_address'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_address') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Phone <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::text('seller_phone', $value=old('seller_phone'), array('placeholder' => 'Seller Phone','class' => 'form-control','required'=>true,'id'=>'seller_phone')) !!}

                                                @if ($errors->has('seller_phone'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_phone') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Email</strong></label>
                                            <div class="col-6">
                                                {!! Form::email('seller_email', $value=old('seller_email'), array('placeholder' => 'Seller Email','class' => 'form-control', 'id'=>'seller_email')) !!}

                                                @if ($errors->has('seller_email'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_email') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Nid Number <span class="text-danger">*</span></strong></label>
                                            <div class="col-6">
                                                {!! Form::text('seller_nid', $value=old('seller_nid'), array('placeholder' => 'NID','class' => 'form-control','required'=>true,'id'=>'seller_nid')) !!}

                                                @if ($errors->has('seller_nid'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_nid') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Trade License Number </strong></label>
                                            <div class="col-6">
                                                {!! Form::text('seller_trade_license', $value=old('seller_trade_license'), array('placeholder' => 'Trade License Number','class' => 'form-control', 'id'=>'seller_trade_license')) !!}

                                                @if ($errors->has('seller_trade_license'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_trade_license') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Seller Tin Number </strong></label>
                                            <div class="col-6">
                                                {!! Form::text('seller_tin', $value=old('seller_tin'), array('placeholder' => 'Tin Number','class' => 'form-control', 'id'=>'seller_tin')) !!}

                                                @if ($errors->has('seller_tin'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_tin') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>Business Mobile No</strong></label>
                                            <div class="col-6">
                                                {!! Form::text('business_phone', $value=old('business_phone'), array('placeholder' => 'Business Mobile No','class' => 'form-control', 'id'=>'business_phone')) !!}

                                                @if ($errors->has('business_phone'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('business_phone') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-3 col-form-label text-right"><strong>Seller Photo</strong></label>
                                            <div class="col-6">

                                                <label class="slide_upload" for="file">

                                                    <img id="image_load" src="{{asset('user/09.jpg')}}" style="width: 150px; height: 150px;cursor:pointer;">

                                                </label>
                                                <input id="file" style="display:none" name="seller_photo" type="file" onchange="photoLoad(this,this.id)" accept="image/*">
                                                @if ($errors->has('seller_photo'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('seller_photo') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row mt-2">
                                            <label for="example-text-input" class="col-2 col-form-label text-right"><strong>NID File</strong></label>
                                            <div class="col-6">
                                                {!! Form::file('nid_file', null, array('placeholder' => 'NID file','class' => 'form-control','required'=>true,'id'=>'nid_file')) !!}

                                                @if ($errors->has('nid_file'))
                                                    <span class="help-block">
                                                <strong class="text-danger">{{ $errors->first('nid_file') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="row pt-3">
                                            <div class="col-md-6 offset-md-3">
                                                <button type="submit" class="btn btn-primary"><i class="la la-check"></i>&nbsp;Register Code</button>
                                                @can('application-list')
                                                    <a href="{{route('bdcs-code.index')}}" class="btn btn-danger"><i class="la la-times"></i>&nbsp;Cancel </a>
                                                @endcan
                                            </div>
                                        </div>

                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')
    <script>
        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
