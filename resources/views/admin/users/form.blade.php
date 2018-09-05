@extends('admin.backend')
@section('title','Form user')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>Form {{ @$user != null? 'update': 'addd' }} user</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
                @if(@$user != null)
                    {{ Form::model(@$user, array('route' => array('user.update', @$user->id), 'enctype' => 'multipart/form-data', 'method' => 'put')) }}
                @else
                    {{ Form::model(@$user, array('route' => array('user.store'), 'enctype' => 'multipart/form-data')) }}
                @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="full_name">Full Name</label>
                                <input id="full_name" type="text" class="form-control{{ $errors->has('full_name') ? ' is-invalid' : '' }}" name="full_name" value="{{ !empty(@$user->full_name) ? $user->full_name : old('full_name') }}" autofocus>
                                @if ($errors->has('full_name'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('full_name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="email">Email</label>
                                    <input {{ !empty(@$user->email) ? 'readonly' : '' }} id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ !empty(@$user->email) ? $user->email : old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-6">
                                    <label for="phone_number">Phone number</label>
                                    <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" value="{{ !empty(@$user->phone_number) ? $user->phone_number : old('phone_number') }}" name="phone_number" required>
                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6" {{ !empty(@$user) ? 'hidden' : '' }}>
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group col-6" {{ !empty(@$user) ? 'hidden' : '' }}>
                                    <label for="password2" class="d-block">Password Confirmation</label>
                                    <input id="password2" type="password" class="form-control" name="password_confirmation">
                                </div>
                                <div class="form-group col-12">
                                    <label for="address">Address</label>
                                    <textarea id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address">{{ !empty(@$user->address) ? $user->address : old('address') }}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group col-12">
                                    {!! Form::Label('role', 'User role') !!}
                                    <select class="form-control" name="role">
                                        @foreach($roles as $value)
                                            <option value="{{$value}}" {{ $value == @$user->role? 'selected': '' }}>{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6">
                                    {{ Form::Label('picture', 'Change profile picture') }}
                                    {{ Form::file('picture') }}
                                    <input type="hidden" name="old_picture" value="{{ @$user->picture }}">
                                </div>
                                <div class="form-group col-6">
                                    <img width="100px" src="{{ url('/uploads/profiles/'.@$user->picture) }}" alt="{{ @$user->full_name }}" class="img-thumbnail"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-lg mr-3">Save</button>
                            <a href="{{ route('user.index') }}" class="btn btn-lg btn-info btn-action">Cancel</a>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>

@endsection