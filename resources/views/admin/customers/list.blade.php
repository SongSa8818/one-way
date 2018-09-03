@extends('admin.backend')
@section('title','Customers list')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Customers list</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->subject }}</td>
                                            <td>{{ $customer->message }}</td>
                                            <td>
                                                {{ Form::open(array('route' => array('customer.destroy', $customer->id), 'method' => 'DELETE')) }}
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-sm btn-danger">Delete</button>
                                                {{ Form::close() }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ $customers->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection