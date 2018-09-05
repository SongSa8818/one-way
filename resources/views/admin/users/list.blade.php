@extends('admin.backend')
@section('title','List users')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>User list</div>
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
                <div class="card">
                    <div class="card-header">
                        <div class="float-right"><a href="{{ route('user.create') }}" class="btn btn-lg btn-primary">
                                <span class="fa fa-plus"></span> Add</a></div>
                        <h4>Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Full name</th>
                                    <th>Phone number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Profile's picture</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->full_name }}</td>
                                    <td>{{ $user->phone_number }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td><div class="sidebar-user-picture">
                                            <img src="{{ url('/uploads/profiles/'.@$user->picture) }}" alt="{{ @$user->full_name }}" width="50px" height="50px" class="rounded-circle"/>
                                        </div>
                                    </td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary pull-left mr-3">Edit</a>
                                        {{ Form::open(array('route' => array('user.destroy', $user->id), 'method' => 'DELETE')) }}
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this user?');" class="btn btn-sm btn-danger">Delete</button>
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ @$users->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection