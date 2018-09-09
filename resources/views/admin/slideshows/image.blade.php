@extends('admin.backend')
@section('title','List image')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Image for property "{{ $property->title }}"</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <a href="{{ route('image.create','&proid='.$property->id) }}" class="btn btn-lg btn-primary">
                                    <span class="fa fa-plus"></span> Add</a>
                                <a href="{{ route('property.list') }}" class="btn btn-lg btn-info">
                                    <span class="fa fa-backward"></span> Back to property</a>
                            </div>
                            <h4>Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($images as $image)
                                        <tr>
                                            <td><img src="{{ url('/uploads/'.$image->img) }}" alt="{{ $image->img }}" class="img-thumbnail w-25" /></td>
                                            <td>
                                                {{ Form::open(array('route' => array('image.destroy', @$image->id), 'method' => 'DELETE')) }}
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection