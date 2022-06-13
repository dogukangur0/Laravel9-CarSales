@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <a href="{{'/cars'}}">view more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                @foreach($productlist1 as $rs)
                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <div class="text-center">
                            <a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 255px;height: 197px;text-align:center"></a>
                        </div>
                        <div class="down-content">
                            <a href="{{route('product',['id'=>$rs->id])}}"><p2>{{$rs->title}}$</p2></a>
                            <h6>{{$rs->price}}$</h6>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>About Us</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <ul class="featured-list">
                            <li>We are trying to have the most up-to-date and widest variety of cars on our site. </li>
                            <li>click for more information</li>
                        </ul><br><br><br><br><br><br><br>
                        <a href="{{route('aboutus')}}" class="filled-button">Read More</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="{{asset('assetss')}}/images/about-1-570x350.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services" style="background-image: url({{asset('assetss')}}/images/other-image-fullscren-1-1920x900.jpg);" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Latest blog posts</h2>

                        <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="{{asset('assetss')}}/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>I</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="{{asset('assetss')}}/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>LOVE</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <a href="#" class="services-item-image"><img src="{{asset('assetss')}}/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

                        <div class="down-content">
                            <h4>CARS</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>You can ask your questions by clicking here</h4>
                            </div>
                            <div class="col-lg-4 col-md-6 text-right">
                                <a href="{{route('contact')}}" class="filled-button">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
