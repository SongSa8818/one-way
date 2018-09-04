@extends('admin.backend')
@section('title','Form khan')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>Form {{ @$khan != null? 'update': 'add' }} khan</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                @if(@$khan != null)
                    {{ Form::model(@$khan, array('route' => array('khan.update', @$khan->id), 'class' => '', 'method' => 'put')) }}
                @else
                    {{ Form::model(@$khan, array('route' => array('khan.store'), 'class' => '')) }}
                @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('title', 'Name') }}
                                {{ Form::text('name', @$khan->name, array('class' => "form-control", 'autofocus')) }}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::Label('city', 'In City') !!}
                                <select class="form-control" name="city_id">
                                    @foreach($cities as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$khan->city_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('khan.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@endsection