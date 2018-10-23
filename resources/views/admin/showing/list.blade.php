@extends('admin.backend')
@section('title','Offer list')
@section('content')


<section class="section">
    <h1 class="section-header">
        <div>Offer list</div>
    </h1>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Offer Table</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price($)</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Picture</th>
                                </tr>
                            @foreach($showings as $property)
                                <tr>
                                    <td>{{ $property->property_number }}</td>
                                    <td>{{ $property->title }}</td>
                                    <td>{{ $property->price }}</td>
                                    <td>{{ $property->type }}</td>
                                    <td><div class="text-uppercase badge badge-{{ $property->status == 'active'?'success':'danger' }}">{{ $property->status }}</div></td>
                                    <td>
                                        <img src="{{ url('/uploads/'.$property->img) }}" alt="avatar" width="100" class="rounded mr-1">
                                    </td>
                                </tr>
                            @endforeach
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ $showings->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection