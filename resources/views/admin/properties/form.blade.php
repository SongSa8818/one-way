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
                                {{ Form::text('title', @$property->title, array('class' => "form-control", 'required' => "required", 'data-error' => "Title is required.", 'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('price', 'Price') }}
                                {{ Form::text('price', @$property->price, array('class' => "form-control", 'required' => "required", 'data-error' => "Price is required.", 'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('width_size', 'Width Size') }}
                                {{ Form::text('width_size', @$property->width_size, array('class' => "form-control", 'required' => "required", 'data-error' => "Width Size is required.", 'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('length_size', 'Length Size') }}
                                {{ Form::text('length_size', @$property->length_size, array('class' => "form-control", 'required' => "required", 'data-error' => "Length Size is required.", 'autofocus')) }}
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
                                {{ Form::text('property_number', @$property->property_number, array('class' => "form-control", 'required' => "required", 'data-error' => "Property ID is required.", 'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('city_id', 'City') !!}
                                <select class="form-control" name="city_id" id="city_id" required>
                                    @foreach($cities as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->city_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('khan_id', 'Khan/District') !!}
                                <select class="form-control" name="khan_id" id="khan_id" required>
                                    <option value=""></option>
                                    @foreach($khans as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->khan_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('sangkat_id', 'Commune/Sangkat') !!}
                                <select class="form-control" name="sangkat_id" id="sangkat_id" required>
                                    <option value=""></option>
                                    @foreach($sangkats as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->sangkat_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('village_id', 'Village') !!}
                                <select class="form-control" name="village_id" id="village_id" required>
                                    <option value=""></option>
                                    @foreach($villages as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$property->village_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('street_name', 'Street Name') }}
                                {{ Form::text('street_name', @$property->street_name, array('class' => "form-control", 'required' => "required", 'data-error' => "Street Name is required.", 'autofocus')) }}
                            </div>
                            <div class="form-group col-6">
                                {{ Form::label('street_number', 'Street Number') }}
                                {{ Form::text('street_number', @$property->street_number, array('class' => "form-control", 'required' => "required", 'data-error' => "Street Number is required.", 'autofocus')) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            <textarea id="description" name="description" rows="7" class="form-control" required="required" data-error="Street Number is required." autofocus>{{ @$property->description }}</textarea>
                        </div>
                        <div class="row">
                            <div class="form-group col-6">
                                {{ Form::label('video_url', 'YouTube Video ID') }}
                                {{ Form::text('video_url', @$property->video_url, array('class' => "form-control")) }}
                            </div>
                            <div class="form-group col-6">
                                {!! Form::Label('status', 'Status') !!}
                                <select class="form-control" name="status">
                                    @foreach($status as $value)
                                        <option value="{{ $value }}" {{ $value == @$property->status? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    {!! Form::Label('pro-address', 'Search address') !!}
                                    <input type="text" class="form-control" id="pro-address"/>
                                </div>
                                <div class="form-group">
                                    {!! Form::Label('pro-lat', 'Latitude') !!}
                                    <input type="text" name="pro_lat" class="form-control" value="{{ @$property->pro_lat }}" id="pro-lat"/>
                                </div>
                                <div class="form-group">
                                    {!! Form::Label('pro-lon', 'Longitude') !!}
                                    <input type="text" name="pro_lon" class="form-control" value="{{ @$property->pro_lon }}" id="pro-lon"/>
                                </div>
                            </div>
                            <div class="col-8">
                                <div id="mapsProperty" style="width: 100%; height: 500px;"></div>
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