@extends('admin.backend')
@section('title','Dashboard')
@section('content')

<section class="section">
    <h1 class="section-header">
        <div>Dashboard</div>
    </h1>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-sm-3">
                <div class="card-icon bg-primary">
                    <i class="ion ion-ios-home"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Properties</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalProperty }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-sm-3">
                <div class="card-icon bg-danger">
                    <i class="ion ion-social-usd"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Offered</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalOffer }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-sm-3">
                <div class="card-icon bg-warning">
                    <i class="ion ion-paper-airplane"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Request</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalRequest }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
            <div class="card card-sm-3">
                <div class="card-icon bg-success">
                    <i class="ion ion-android-contact"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Agencies</h4>
                    </div>
                    <div class="card-body">
                        {{ $totalAgency }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('offer.offerList') }}" class="btn btn-primary">View All</a>
                    </div>
                    <h4>Offers</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>ID</th>
                                <th>Offer amount</th>
                                <th>Picture</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($offers as $offer)
                                <tr>
                                    <td>
                                        {{ $offer->title }}
                                        <div class="table-links">
                                            Offered by <a href="#">{{ $offer->full_name }}</a>
                                        </div>
                                    </td>
                                    <td>{{ $offer->property_number }}</td>
                                    <td>${{ $offer->offer_amount }}</td>
                                    <td>
                                        <a href="#">
                                            <img src="{{ url('/uploads/'.$offer->img) }}" alt="avatar" width="30" class="rounded mr-1">
                                        </a>
                                    </td>
                                    {{--<td>--}}
                                        {{--<a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Accept"><i class="ion ion-android-done"></i> Accept</a>--}}
                                        {{--<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Reject"><i class="ion ion-android-close"></i> Reject</a>--}}
                                    {{--</td>--}}
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="/request-list" class="btn btn-primary">View All</a>
                    </div>
                    <h4>Requests</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            @foreach($request_infos as $request_info)
                            <tbody>
                                <tr>
                                    <td style="width: 60%">
                                        {{ $request_info->description }}
                                        <div class="table-links">
                                            Requested by <a href="#">{{ $request_info->customer_name }}</a>
                                        </div>
                                    </td>
                                    <td>{{ $request_info->min_budget }}$ -  {{ $request_info->max_budget }}$</td>
                                    <td>
                                        <a href="#"><span class="fa fa-check-circle" style="font-size:17px;color:blue"></span> </a>
                                        <a href="#"><span class="fa fa-trash danger" style="font-size:17px;color:red"></span> </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Showing</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        @foreach($showings as $showing)
                            <li class="media">
                                <span class="ion ion-ios-home-outline"></span>
                                <div class="media-body">
                                    {{--<div class="float-right"><small>10m</small></div>--}}
                                    <div class="media-title"><a href="{{ route('property.show', $showing->id) }}">{{ $showing->title }}</a></div>
                                    <small>{{ substr($showing->description,0, 120) }}...</small>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="text-center">
                        <a href="{{ route('showing.list') }}" class="btn btn-primary btn-round">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>Customers Directly Contact</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border">
                        @for($i = 0; $i < 4; $i++)
                            <li class="media">
                                <span class="ion ion-email-unread"></span>
                                <div class="media-body">
                                    <div class="float-right"><small>10m</small></div>
                                    <div class="media-title">Farhan A Mujib</div>
                                    <small>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</small>
                                </div>
                            </li>
                        @endfor
                    </ul>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary btn-round">
                            View All
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection