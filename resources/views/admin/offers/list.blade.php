@extends('admin.backend')
@section('title','Offer list')
@section('content')


<section class="section">
    <h1 class="section-header">
        <div>Offer list</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Offer Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price($)</th>
                                    <th>Offer amount($)</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Picture</th>
                                    <th>Action</th>
                                </tr>
                            @foreach($offers as $property)
                                <tr>
                                    <td>{{ $property->property_number }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->offer_amount }}</td>
                                    <td>{{ $property->type }}</td>
                                    <td><div class="text-uppercase badge badge-{{ $property->status == 'active'?'success':'danger' }}">{{ $property->status }}</div></td>
                                    <td>
                                        <img src="{{ url('/uploads/'.$property->img) }}" alt="avatar" width="30" class="rounded mr-1">
                                    </td>
                                    <td>
                                        {{ Form::open(array('route' => array('property.accept', $property->id), 'method' => 'put')) }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to accept this offer?');" class="btn btn-sm btn-primary pull-left mr-3">Accept</button>
                                        {{ Form::close() }}
                                        {{ Form::open(array('route' => array('property.reject', $property->id), 'method' => 'put')) }}
                                        <button type="submit" onclick="return confirm('Are you sure you want to reject this offer?');" class="btn btn-sm btn-danger">Reject</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ $offers->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection