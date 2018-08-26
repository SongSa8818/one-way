@extends('admin.backend')
@section('title','Form sangkat')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>Form {{ @$sangkat != null? 'update': 'addd' }} sangkat</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                @if(@$sangkat != null)
                    {{ Form::model(@$sangkat, array('route' => array('sangkat.update', @$sangkat->id), 'class' => '', 'method' => 'put')) }}
                @else
                    {{ Form::model(@$sangkat, array('route' => array('sangkat.store'), 'class' => '')) }}
                @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                {{ Form::label('title', 'Name') }}
                                {{ Form::text('name', @$sangkat->name, array('class' => "form-control", 'autofocus')) }}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::Label('city', 'In Khan') !!}
                                <select class="form-control" name="khan_id">
                                    @foreach($khans as $key => $value)
                                        <option value="{{$key}}" {{ $key == @$sangkat->khan_id? 'selected': '' }}>{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('sangkat.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@endsection