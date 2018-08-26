@extends('admin.backend')
@section('title','Form add new property')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <form method="post" class="needs-validation" novalidate="">
                <div class="card">
                    <div class="card-header">
                        <h4>Add property</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="title">Title</label>
                                <input id="title" type="text" class="form-control" name="title" autofocus>
                            </div>
                            <div class="form-group col-6">
                                <label for="price">Price</label>
                                <input id="price" type="text" class="form-control" name="price">
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('property_type', 'Property type') !!}
                                <select class="form-control" name="property_type">
                                    @foreach($propertyTypes as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="last_name">Property ID</label>
                                <input id="last_name" type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('city_id', 'City') !!}
                                <select class="form-control" name="city_id">
                                    @foreach($cities as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('khan_id', 'Khan') !!}
                                <select class="form-control" name="khan_id">
                                    @foreach($khans as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('sangkat_id', 'Sangkat') !!}
                                <select class="form-control" name="sangkat_id">
                                    @foreach($sangkats as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$village->sangkat_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('village_id', 'Village') !!}
                                <select class="form-control" name="village_id">
                                    @foreach($villages as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea class="summernote-simple" style="display: none;"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Save Draft</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection