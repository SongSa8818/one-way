@extends('admin.backend')
@section('title','Form image')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Form add image</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    @if(@$slideshow != null)
                        {{ Form::model(@$slideshow, array('route' => array('slideshow.update', @$slideshow->id), 'enctype' => 'multipart/form-data', 'method' => 'put')) }}
                    @else
                        {{ Form::model(@$slideshow, array('route' => array('slideshow.store'), 'enctype' => 'multipart/form-data')) }}
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-6">
                                    {{ Form::Label('image', 'Upload New Slideshow') }}
                                    {{ Form::file('image') }}
                                    <input type="hidden" name="old_picture" value="{{ @$slideshow->image }}">
                                </div>
                                <div class="form-group col-6">
                                    <img width="100px" src="{{ url('/uploads/slideshows/'.@$slideshow->image) }}" class="img-thumbnail"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('slideshow.list') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

@endsection