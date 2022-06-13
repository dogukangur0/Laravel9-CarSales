@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-6-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
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
            <li><a href="#">Car</a></li>
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
                            <div class="col-sm-5 col-6">
                                <div>
                                    <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-6">
                    <form action="#" method="post" class="form">
                        @include('home.messages')
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Price</span>

                                    <strong class="pull-right">{{$data->price}}$</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Brand</span>

                                    <strong class="pull-right">{{$data->category->title}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Series</span>

                                    <strong class="pull-right">{{$data->description}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right">{{$data->series}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Fuel</span>

                                    <strong class="pull-right">{{$data->fuel}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Gear</span>

                                    <strong class="pull-right">{{$data->gear}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">KM</span>

                                    <strong class="pull-right">{{$data->km}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Case Type</span>

                                    <strong class="pull-right">{{$data->casetype}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Motor Power</span>

                                    <strong class="pull-right">{{$data->motorpower}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Color</span>

                                    <strong class="pull-right">{{$data->color}}</strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Guarantee</span>

                                    <strong class="pull-right">{{$data->guarantee}}</strong>
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
                <div class="col-md-5">
                    <div class="section-heading">
                        <h2>Vehicle Description</h2>
                    </div>

                    <div class="left-content">
                        <p>{{$data->description}}</p>
                    </div>
                </div>

                <div class="col-md-7">
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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-uppercase">Write Your Review</h4>
                    <p>Your email address will not be published.</p>
                    <br>
                        <form class="review-form" action="{{route('storecomment')}}" method="post">
                            @csrf
                            <input class="input" type="hidden" name="product_id" value="{{$data->id}}" />
                            <div class="form-group">
                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                            </div>
                            <br>
                            <div class="form-group">
                                    <textarea name="comment" rows="6" class="form-control" placeholder="Your Comment"></textarea>
                            </div>
                            <strong class="text-uppercase">Your Rating: </strong>
                            <div class="form-group">
                                <div class="input-raiting">
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5"></label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4"></label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3"></label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2"></label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1"></label>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            @auth
                                    <button class="primary-btn">Submit</button>
                            @else
                                    <a href="/login" class="primary-btn">For Submit Your Review,Please Login</a>
                            @endauth
                        </form>
                </div>
                <div class="col-md-6">
                    <div class="product-reviews">
                        @foreach($reviews as $rs)
                            <div class="single-review">
                                <div class="review-heading">
                                    <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}}</a></div>
                                    <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->created_at}}</a></div>
                                    <div class="review-rating pull-right">
                                        @for($i=0 ; $i< $rs->rate ; $i++)
                                            <i>⭐</i>
                                        @endfor
                                        @for($i=0 ; $i<(5-$rs->rate) ; $i++)
                                            <i>★</i>
                                        @endfor
                                    </div>
                                </div>
                                <div class="review-body">
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->comment}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
