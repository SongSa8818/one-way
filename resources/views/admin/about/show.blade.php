@extends('admin.backend')
@section('title','About Show')
@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>About Show</div>
        </h1>
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>About Company</h4>
                        </div>
                        <div class="card-body">
                            <div class="estate_contact_form">
                                <div class="content">
                                </div>
                            </div>
                            <div class="intro">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-7 order-lg-1 order-2">
                                            <h2 class="intro_title">The One Way Realty</h2>
                                            <div class="intro_subtitle">Sed vestibulum lectus ut leo molestie, id suscipit magna</div>
                                            <p class="intro_text">Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tellus eros, placerat quis fermentum et, viverra sit amet lacus. Nam gravida semper augue id sagittis. Cras nec arcu quis velit tempor porttitor sit amet vel risus. Sed vestibulum lectus ut leo molestie, id suscipit magna mattis. Vivamus nisl ligula, varius congue dui sit amet, vestibulum sollicitudin mauris. Vestibulum quis ligula in nunc varius maximus ac et nunc. Nulla sed magna turpis.</p>
                                            <div class="button"><a class="btn btn-primary" href="#">read more</a></div>
                                        </div>
                                        <div class="col-lg-5 order-lg-2 order-1">
                                            <div class="intro_image">
                                                <img src="/images/intro.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <div class="button"><a class="btn btn-primary" href="/about/create">Edit</a></div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection