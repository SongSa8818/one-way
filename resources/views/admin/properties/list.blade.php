@extends('admin.backend')
@section('title','Properties list')
@section('content')


<section class="section">
    <h1 class="section-header">
        <div>Properties list</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right"><a href="{{ route('property.create') }}" class="btn btn-lg btn-primary"><span class="fa fa-plus"></span> Add</a></div>
                        <h4>Properties Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price($)</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>View images</th>
                                    <th>Action</th>
                                </tr>
                            @foreach($properties as $property)
                                <tr>
                                    <td>{{ $property->property_number }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->type }}</td>
                                    <td><div class="text-uppercase badge badge-{{ $property->status == 'active'?'success':'danger' }}">{{ $property->status }}</div></td>
                                    <td><a href="{{ route('image.edit', $property->id) }}" class="btn btn-sm btn-info"><span class="ion ion-image"></span>
                                            Images
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('property.edit', $property->id) }}" class="btn btn-sm btn-primary pull-left mr-3">Edit</a>
                                        {{ Form::open(array('route' => array('property.destroy', $property->id), 'method' => 'DELETE')) }}
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
                            {{ $properties->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection