@extends('admin.backend')
@section('title','Request Form')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Request Form</div>
        </h1>
        <div class="section-body">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="content">
                            <div class="body">
                                <div class="row">
                                    <div class="row col-6">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="row">Customer Request Form</th>
                                                    <th scope="col"></th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">Customer Name:</th>
                                                    <td>{{ $request_infos->customer_name }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Service Type:</th>
                                                    <td>{{ $request_infos->service_type }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Property Type:</th>
                                                    <td>{{ $request_infos->property_type }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Business Purpose:</th>
                                                    <td>{{ $request_infos->business_purpose }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Location:</th>
                                                    <td>{{ $request_infos->location }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Zone:</th>
                                                    <td>{{ $request_infos->zone }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Min Size Area:</th>
                                                    <td>{{ $request_infos->minsize_area }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Max Siz Area:</th>
                                                    <td>{{ $request_infos->maxsize_area }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Min Budget:</th>
                                                    <td>{{ $request_infos->min_budget }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Max Budget:</th>
                                                    <td>{{ $request_infos->max_budget }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Bank Loan Service:</th>
                                                    <td>{{ $request_infos->bank_loan_service }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Bank Statement:</th>
                                                    <td>{{ $request_infos->bank_statement }}</td>

                                                </tr>
                                                <tr>
                                                    <th scope="row">Description:</th>
                                                    <td>{{ $request_infos->description }}</td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row col-6">
                                        <img src="{{ url('/uploads/requests/'.@$request_infos->image) }}" width="100%" height="100%" class="intro_image"/>
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