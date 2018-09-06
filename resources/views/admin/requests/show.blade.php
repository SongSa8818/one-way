@extends('admin.backend')
@section('title','Request Form')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Request Form</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="content">
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th scope="row" style="width: 30%">Customer Request Form</th>
                                                <th scope="col"></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row" style="width: 30%">Customer Id:</th>
                                                <td>{{ $request_infos->customer_id }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Service Type:</th>
                                                <td>{{ $request_infos->service_type }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Property Type:</th>
                                                <td>{{ $request_infos->property_type }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Business Purpose:</th>
                                                <td>{{ $request_infos->business_purpose }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Location:</th>
                                                <td>{{ $request_infos->location }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Zone:</th>
                                                <td>{{ $request_infos->zone }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Min Size Area:</th>
                                                <td>{{ $request_infos->minsize_area }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Max Siz Area:</th>
                                                <td>{{ $request_infos->maxsize_area }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Min Budget:</th>
                                                <td>{{ $request_infos->min_budget }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Max Budget:</th>
                                                <td>{{ $request_infos->max_budget }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Bank Loan Service:</th>
                                                <td>{{ $request_infos->bank_loan_service }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Bank Statement:</th>
                                                <td>{{ $request_infos->bank_statement }}</td>

                                            </tr>
                                            <tr>
                                                <th scope="row" style="width: 30%">Description:</th>
                                                <td>{{ $request_infos->description }}</td>

                                            </tr>

                                            </tbody>
                                        </table>
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