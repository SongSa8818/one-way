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
                {{ Form::model('', array('route' => array('image.store'), 'enctype' => 'multipart/form-data')) }}
                    <input type="hidden" name="proid" value="<?php echo $_GET['proid'] ?>">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('image', 'Upload image : ') }}
                                {{ Form::file('image') }}
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('image.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@endsection