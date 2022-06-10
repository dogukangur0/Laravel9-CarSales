@extends('layouts.frontbase')

@section('title','User Panel')


@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-1-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>user panel</h4>
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
                <li class="active">/User Menu</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="section-heading">
                        <h2>User Menu</h2>
                    </div>
                    @include('home.user.usermenu')
                </div>
                <div class="col-md-10">
                    <div class="shipping-methods">
                        <div class="section-heading">
                            <h2>User Profile</h2>
                        </div>
                        <div class="input-checkbox">
                            @include('profile.show')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection



