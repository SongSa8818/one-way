@extends('admin.backend')
@section('title','Form Contact Us')
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Form {{ @$about != null? 'update': 'add' }} about</div>
        </h1>
        <div class="section-body">

            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))
                    <div class="alert alert-{{$msg}} alert-dismissible fade show" role="alert">
                        {{ Session::get('alert-' . $msg) }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            @endforeach


            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    @if(@$about != null)
                        {{ Form::model(@$about, array('route' => array('about.update', @$about->id), 'class' => '', 'method' => 'put')) }}
                    @else
                        {{ Form::model(@$about, array('route' => array('about.store'), 'class' => '')) }}
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="estate_contact_form">
                                <div class="content">

                                    <div class="form-group">
                                        {{ Form::label('company_slogan', 'Sub Title') }}
                                        {{ Form::text('company_slogan', @$about->company_slogan, array('class' => "form-control", 'autofocus')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description', 'Description') }}
                                        {{ Form::textarea('description', @$about->description, array('class' => "form-control")) }}
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('dashboard.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>

@endsection