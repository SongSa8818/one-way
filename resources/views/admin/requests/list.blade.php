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
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Service Type</th>
                                        <th>Property Type</th>
                                        <th>Purpose</th>
                                        <th>Zone</th>
                                        <th>Action</th>
                                    </tr>

                                        <tr>
                                            <td>{{ $request_infos->customer_id }}</td>
                                            <td>{{ $request_infos->service_type }}</td>
                                            <td>{{ $request_infos->property_type }}</td>
                                            <td>{{ $request_infos->business_purpose }}</td>
                                            <td>{{ $request_infos->zone }}</td>
                                            <td>
                                                <a href="{{ route('request.show', $request_infos->id) }}" class="btn btn-sm btn-primary pull-left mr-3">View</a>
                                                {{ Form::open(array('route' => array('request.destroy', $request_infos->id), 'method' => 'DELETE')) }}
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>

                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection