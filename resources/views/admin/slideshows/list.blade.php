@extends('admin.backend')
@section('title','List image')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Image for Slideshow</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right">
                                <div class="float-right"><a href="{{ route('slideshow.create') }}" class="btn btn-lg btn-primary"><span class="fa fa-plus"></span> Add</a></div>
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
                                    @foreach($slideshows as $slideshow)
                                        <tr>
                                            <td><div class="sidebar-user-picture">
                                                    <img src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" width="100px" height="80px" class="img-thumbnail w-25"/>
                                                </div>
                                            </td>
                                            <td>
                                                {{ Form::open(array('route' => array('slideshow.destroy', $slideshow->id), 'method' => 'DELETE')) }}
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete');" class="btn btn-sm btn-danger">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ @$slideshows->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection