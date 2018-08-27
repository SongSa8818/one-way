@extends('admin.backend')
@section('title','About create')
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>Create About</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write About Company Here</h4>
                        </div>
                        <div class="card-body">
                            <div class="estate_contact_form">
                                <div class="content">
                                    <form >
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputTitle">Title</label>
                                                <input type="text" class="form-control" id="inputTitle" placeholder="Enter Title Company">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSubtitle">Sub Title</label>
                                            <input type="text" class="form-control" id="inputSubtitle" placeholder="Enter Sub Title of Company">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm">Save</button>
                                <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection