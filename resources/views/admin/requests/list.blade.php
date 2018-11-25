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
                                        <th>Requested by</th>
                                        <th>Service Type</th>
                                        <th>Property Type</th>
                                        <th>Purpose</th>
                                        <th>Zone</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($request_infos as $request_info)
                                        <tr>
                                            <td>{{ $request_info->customer_name }}</td>
                                            <td>{{ $request_info->service_type }}</td>
                                            <td>{{ $request_info->property_type }}</td>
                                            <td>{{ $request_info->business_purpose }}</td>
                                            <td>{{ $request_info->zone }}</td>
                                            <td>
                                                <a href="{{ route('request.show', $request_info->id) }}" class="btn btn-sm btn-primary pull-left mr-3">View</a>
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