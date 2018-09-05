@extends('admin.backend')
@section('title','Request list')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Request list</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Customer ID</th>
                                        <th>Service Type</th>
                                        <th>Property Type</th>
                                        <th>Business Purpose</th>
                                        <th>Location</th>
                                        <th>Zone</th>
                                        <th>MinSize Area</th>
                                        <th>MaxSize Area</th>
                                        <th>Min Budget</th>
                                        <th>Max Budget</th>
                                        <th>BankLoan Service</th>
                                        <th>Bank Statement</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($request_infos as $request_info)
                                        <tr>
                                            <td>{{ $request_info->customer_id }}</td>
                                            <td>{{ $request_info->service_type }}</td>
                                            <td>{{ $request_info->property_type }}</td>
                                            <td>{{ $request_info->business_purpose }}</td>
                                            <td>{{ $request_info->location }}</td>
                                            <td>{{ $request_info->zone }}</td>
                                            <td>{{ $request_info->minsize_area }}</td>
                                            <td>{{ $request_info->maxsize_area }}</td>
                                            <td>{{ $request_info->min_budget }}</td>
                                            <td>{{ $request_info->max_budget }}</td>
                                            <td>{{ $request_info->bank_loan_service }}</td>
                                            <td>{{ $request_info->bank_statement }}</td>
                                            <td>{{ $request_info->description }}</td>
                                            <td>
                                                {{ Form::open(array('route' => array('request.destroy', $request_info->id), 'method' => 'DELETE')) }}
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ $request_infos->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection