@extends('master')
@section('title','Request')
@section('content')

    <div class="listings">
        <div class="container">
            <div class="request">
                <div class="row mb-5">
                    <div class="col">
                        <div class="section_title text-center">
                            <h3>Request To Company</h3>
                            <span class="section_subtitle">You can buy sale or rent property here</span>
                        </div>
                    </div>
                </div>

                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                        <div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
                            {{ Session::get('alert-' . $msg) }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                @endforeach

                @if(@$request_info != null)
                    {{ Form::model(@$request_info, array('route' => array('request.update', @$request_info->id), 'class' => '', 'method' => 'put')) }}
                @else
                    {{ Form::model(@$request_info, array('route' => array('request.store'), 'class' => '', 'enctype' => 'multipart/form-data')) }}
                @endif
                <div class="estate_contact_form">
                    <div class="content">
                        <div class="hidden">
                            {{ Form::text('customer_name', @Auth::user()->full_name) }}
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-6">
                                    {{ Form::label('service_type', 'Service type', array('class' => 'required') ) }}
                                    {{ Form::text('service_type', @$request_info->service_type, array('class' => "form-control", 'required' => "required", 'data-error' => "Service type is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('property_type', 'Property type', array('class' => 'required') ) }}
                                    {{ Form::text('property_type', @$request_info->property_type, array('class' => "form-control", 'required' => "required", 'data-error' => "Property type is required.")) }}
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                {{ Form::label('business_purpose', 'Business purpose', array('class' => 'required') ) }}
                                {{ Form::text('business_purpose', @$request_info->business_purpose, array('class' => "form-control", 'required' => "required", 'data-error' => "Business Purpose is required.")) }}
                            </div>
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-6">
                                    {{ Form::label('location', 'Location', array('class' => 'required') ) }}
                                    {{ Form::text('location', @$request_info->location, array('class' => "form-control", 'required' => "required", 'data-error' => "Location is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('zone', 'Zone', array('class' => 'required') ) }}
                                    {{ Form::text('zone', @$request_info->zone, array('class' => "form-control", 'required' => "required", 'data-error' => "Zone is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('minsize_area', 'Min size area', array('class' => 'required') ) }}
                                    {{ Form::text('minsize_area', @$request_info->minsize_area, array('class' => "form-control", 'required' => "required", 'data-error' => "Min Size Area is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('maxsize_area', 'Max size area', array('class' => 'required') ) }}
                                    {{ Form::text('maxsize_area', @$request_info->maxsize_area, array('class' => "form-control", 'required' => "required", 'data-error' => "Max Size Area is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('min_budget', 'Min budget', array('class' => 'required') ) }}
                                    {{ Form::text('min_budget', @$request_info->min_budget, array('class' => "form-control", 'required' => "required", 'data-error' => "Min Budget is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('max_budget', 'Max budget', array('class' => 'required') ) }}
                                    {{ Form::text('max_budget', @$request_info->max_budget, array('class' => "form-control", 'required' => "required", 'data-error' => "Max Budget is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('bank_loan_service', 'Bank loan service', array('class' => 'required') ) }}
                                    {{ Form::text('bank_loan_service', @$request_info->bank_loan_service, array('class' => "form-control", 'required' => "required", 'data-error' => "Bank Loan Service is required.")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('bank_statement', 'Bank statement', array('class' => 'required') ) }}
                                    {{ Form::text('bank_statement', @$request_info->bank_statement, array('class' => "form-control", 'required' => "required", 'data-error' => "Bank Statement is required.")) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', @$request_info->description, array('id' => "exampleFormControlTextarea1",'rows' => "3", 'class' => "form-control")) }}
                            </div>
                            <h4>Upload picture</h4>
                            <div class="form-group col-12">
                                {{ Form::file('image') }}
                            </div>

                            <div class="form-group col-12">
                                <canvas id="signature" width="450" height="150"
                                        style="border: 1px solid #ddd;"></canvas>
                                <br>
                                <button type="button" class="btn btn-warning mr-2" id="clear-signature">Clear</button>
                                <button type="button" class="btn btn-info mr-2" id="save-signature">Add signature
                                </button>
                            </div>
                            <div class="form-group col-12">
                                <img id="image_signature" alt="">
                                <input type="hidden" id="input_signature" name="inputSignature">
                            </div>

                            <hr>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg mr-3">Request</button>
                                <a href="{{ route('request.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection