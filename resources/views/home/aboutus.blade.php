@extends('layouts.frontbase')

@section('title','About Us | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-1-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>our company</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">/About Us</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $setting->aboutus !!}
                </div>
            </div>
        </div>

    </div>

@endsection


