@extends('admin.backend')
@section('title','Request Info')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Request Info</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <form>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Customer Id:</label>
                            <div class="col-sm-10">
                                <label class="col-sm-2 col-form-label">{{ $request_infos->customer_id }}</label>
                            </div>
                        </div>

                    </form>


                    <div class="card">
                        <div class="card-body">
                            <div class="content">
                                <div class="body">
                                    <div class="row">
                                        <div class="form-group col-6">Customer Id: {{ $request_infos->customer_id }}</div>
                                        <div class="form-group col-6">Service Type: {{ $request_infos->service_type }}</div>
                                        <div class="form-group col-6">Property Type: {{ $request_infos->property_type }}</div>
                                        <div class="form-group col-6">Business Purpose: {{ $request_infos->business_purpose }}</div>
                                        <div class="form-group col-6">Location: {{ $request_infos->location }}</div>
                                        <div class="form-group col-6">Zone: {{ $request_infos->zone }}</div>
                                        <div class="form-group col-6">Min Size Area: {{ $request_infos->minsize_area }}</div>
                                        <div class="form-group col-6">Max Siz Area: {{ $request_infos->maxsize_area }}</div>
                                        <div class="form-group col-6">Min Budget: {{ $request_infos->min_budget }}</div>
                                        <div class="form-group col-6">Max Budget: {{ $request_infos->max_budget }}</div>
                                        <div class="form-group col-6">Bank Loan Service: {{ $request_infos->bank_loan_service }}</div>
                                        <div class="form-group col-6">Bank Statement: {{ $request_infos->bank_statement }}</div>
                                        <div class="form-group col-6">Description: {{ $request_infos->description }}</div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection