@extends('admin.backend')
@section('title','Form add new property')
@section('content')

<section class="section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            @if(@$property != null)
                {{ Form::model(@$property, array('route' => array('property.update', @$property->id), 'class' => '', 'method' => 'put')) }}
            @else
                {{ Form::model(@$property, array('route' => array('property.store'), 'class' => '')) }}
            @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add property</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', @$property->title, array('class' => "form-control",'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('price', 'Price') }}
                                {{ Form::text('price', @$property->price, array('class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('type', 'Property type') !!}
                                <select class="form-control" name="type">
                                    @foreach($propertyTypes as $value)
                                        <option value="{{$value}}" {{ $value == @$property->type? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('property_number', 'Property ID') }}
                                {{ Form::text('property_number', @$property->property_number, array('class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('city_id', 'City') !!}
                                <select class="form-control" name="city_id">
                                    @foreach($cities as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->city_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('khan_id', 'Khan') !!}
                                <select class="form-control" name="khan_id">
                                    @foreach($khans as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->khan_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('sangkat_id', 'Sangkat') !!}
                                <select class="form-control" name="sangkat_id">
                                    @foreach($sangkats as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->sangkat_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('village_id', 'Village') !!}
                                <select class="form-control" name="village_id">
                                    @foreach($villages as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->village_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('street_name', 'Street ame') }}
                                {{ Form::text('street_name', @$property->street_name, array('class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('street_number', 'Street Number') }}
                                {{ Form::text('street_number', @$property->street_number, array('class' => "form-control")) }}
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="description" class="summernote-simple" style="display: none;">{{ @$property->description }}</textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('video_url', 'YouTube Video ID') }}
                                {{ Form::text('video_url', @$property->video_url, array('class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('status', 'Active / Inactive') !!}
                                <select class="form-control" name="status">
                                    @foreach(\App\Active::getKeys() as $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                        <a href="{{ route('property.list') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</section>

@endsection