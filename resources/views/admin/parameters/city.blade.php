@extends('admin.backend')
@section('title','Form add new property')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>City list</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right"><a href="{{ route('city.create') }}" class="btn btn-lg btn-primary"><span class="fa fa-plus"></span> Add</a></div>
                        <h4>Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city->name }}</td>
                                    <td>
                                        <a href="{{ route('city.edit', $city->id) }}" class="btn btn-sm btn-primary pull-left mr-3">Edit</a>
                                        {{ Form::open(array('route' => array('city.destroy', @$city->id), 'method' => 'DELETE')) }}
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ $cities->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection