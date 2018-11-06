@extends('admin.backend')
@section('title','Form city')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>Form {{ @$city != null? 'update': 'addd' }} city</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                @if(@$city != null)
                    {{ Form::model(@$city, array('route' => array('city.update', @$city->id), 'class' => '', 'method' => 'put')) }}
                @else
                    {{ Form::model(@$city, array('route' => array('city.store'), 'class' => '')) }}
                @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('title', 'Name') }}
                                {{ Form::text('name', @$city->name, array('class' => "form-control", 'required' => "required", 'data-error' => "Name is required.", 'autofocus')) }}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('city.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@endsection