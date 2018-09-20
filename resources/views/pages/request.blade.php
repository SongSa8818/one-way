@extends('master')
@section('title','Request')
@section('content')

    <div class="listings">
        <div class="container">
            <div class="request">
                <div class="row mb-5">
                    <div class="col">
                        @if(@$request_info != null)
                            {{ Form::model(@$request_info, array('route' => array('request.update', @$request_info->id), 'class' => '', 'method' => 'put')) }}
                        @else
                            {{ Form::model(@$request_info, array('route' => array('request.store'), 'class' => '')) }}
                        @endif
                        <div class="section_title text-center">
                            <h3>Request To Company</h3>
                            <span class="section_subtitle">You Can Buy Sale Or Rent Property Here</span>
                        </div>
                    </div>
                </div>
                <div class="estate_contact_form">
                    <div class="content">
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-6">
                                    {{ Form::label('service_type', '*Service Type') }}
                                    {{ Form::text('service_type', @$request_info->service_type, array('class' => "form-control",'autofocus')) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('property_type', '*Property Type') }}
                                    {{ Form::text('property_type', @$request_info->property_type, array('class' => "form-control")) }}
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                                {{ Form::label('business_purpose', '*Business Purpose') }}
                                {{ Form::text('business_purpose', @$request_info->business_purpose, array('class' => "form-control")) }}
                            </div>
                        <div class="body">
                            <div class="row">
                                <div class="form-group col-6">
                                    {{ Form::label('location', '*Location') }}
                                    {{ Form::text('location', @$request_info->location, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('zone', '*Zone') }}
                                    {{ Form::text('zone', @$request_info->zone, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('minsize_area', '*Min Size Area') }}
                                    {{ Form::text('minsize_area', @$request_info->minsize_area, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('maxsize_area', '*Max Size Area') }}
                                    {{ Form::text('maxsize_area', @$request_info->maxsize_area, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('min_budget', '*Min Budget') }}
                                    {{ Form::text('min_budget', @$request_info->min_budget, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('max_budget', '*Max Budget') }}
                                    {{ Form::text('max_budget', @$request_info->max_budget, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('bank_loan_service', 'Bank Loan Service') }}
                                    {{ Form::text('bank_loan_service', @$request_info->bank_loan_service, array('class' => "form-control")) }}
                                </div>
                                <div class="form-group col-6">
                                    {{ Form::label('bank_statement', 'Bank Statement') }}
                                    {{ Form::text('bank_statement', @$request_info->bank_statement, array('class' => "form-control")) }}
                                </div>
                            </div>
                            <div class="form-group">
                                {{ Form::label('description', 'Description') }}
                                {{ Form::textarea('description', @$request_info->description, array('id' => "exampleFormControlTextarea1",'rows' => "3", 'class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::Label('image', 'Upload Photo of Property') }}
                                {{ Form::file('image') }}
                                <input type="hidden" name="old_picture" value="{{ @$request_info->image }}">
                            </div>
                            <div class="form-group col-6">
                                <img width="100px" src="{{ url('/uploads/requests/'.@$request_info->image) }}" class="img-thumbnail"/>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg mr-3">Request</button>
                                <a href="{{ route('request.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection