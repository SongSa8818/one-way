@extends('admin.backend')
@section('title','Contact Info create')
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Form {{ @$contact_info != null? 'update': 'add' }} Contact Info</div>
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
                    @if(@$contact_info != null)
                        {{ Form::model(@$contact_info, array('route' => array('contact.update', @$contact_info->id), 'class' => '', 'method' => 'put')) }}
                    @else
                        {{ Form::model(@$contact_info, array('route' => array('contact.store'), 'class' => '')) }}
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="estate_contact_form">
                                <div class="content">

                                    <div class="form-group">
                                        {{ Form::label('address', 'Address') }}
                                        {{ Form::text('address', @$contact_info->address, array('class' => "form-control", 'autofocus')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('phone_number', 'Phone Number') }}
                                        {{ Form::text('phone_number', @$contact_info->phone_number, array('class' => "form-control", 'autofocus')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('email', 'E-mail') }}
                                        {{ Form::text('email', @$contact_info->email, array('class' => "form-control", 'autofocus')) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('website', 'Website') }}
                                        {{ Form::text('website', @$contact_info->website, array('class' => "form-control")) }}
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