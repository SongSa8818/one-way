@extends('admin.backend')
@section('title','About create')
@section('content')

    <section class="section">
        <h1 class="section-header">
            <div>Update Text About</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="float-right"><a href="{{ route('about.create') }}" class="btn btn-lg btn-primary"><span class="fa fa-plus"></span> Add</a></div>
                            <h4>Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Description</th>
                                    </tr>
                                    @foreach($abouts as $about)
                                        <tr>
                                            <td>{{ $about->title }}</td>
                                            <td>{{ $about->sub_title }}</td>
                                            <td>{{ $about->description }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                {{ $about->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection