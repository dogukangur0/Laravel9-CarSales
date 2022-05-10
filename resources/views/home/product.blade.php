@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4><del>$11999.00</del> <strong class="text-primary">$11779.00</strong></h4>
                        <h2>Lorem ipsum dolor sit amet</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--BREADCRUMB-->
    <div id="breadcrumb">

        <ul class="breadcrumb">
            <li><a href="#">Home </a></li>
            <li>-></li>
            <li><a href="#">Product</a></li>
            <li>-></li>
            <li><a href="#">{{$data->category->title}}</a></li>
            <li>-></li>
            <li><a href="#">{{$data->title}}</a></li>
        </ul>

    </div>
    <!--/BREADCRUMB-->

    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img src="{{Storage::url($data->image)}}" alt="" class="img-fluid wc-image">
                    </div>
                    @foreach($images as $rs)
                        <div class="row">
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>

                                    <strong class="pull-right">Used vehicle</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Make</span>

                                    <strong class="pull-right">Lorem ipsum dolor sit</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right">Lorem ipsum dolor sit</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">First registration</span>

                                    <strong class="pull-right">05/2010</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mileage</span>

                                    <strong class="pull-right">5000 km</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right">Diesel</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Engine size</span>

                                    <strong class="pull-right">1800 cc</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Power</span>

                                    <strong class="pull-right">85 hp</strong>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Gearbox</span>

                                    <strong class="pull-right">Manual</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Number of seats</span>

                                    <strong class="pull-right">4</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Doors</span>

                                    <strong class="pull-right">2/3</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Color</span>

                                    <strong class="pull-right">Black</strong>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Vehicle Description</h2>
                    </div>

                    <div class="left-content">
                        <p>{{$data->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Vehicle Detail</h2>
                    </div>

                    <div class="left-content">
                        <p>{!! $data->detail !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
