@extends('layouts.frontbase')

@section('title','User Comments & Reviews')


@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-1-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>user comment</h4>
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
                <li class="active">/User Comment</li>
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
                            <h2>User Comments & Reviews</h2>
                        </div>
                        <div class="input-checkbox">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">Id</th>
                                    <th>Product</th>
                                    <th>Subject</th>
                                    <th>Comment</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th style="width: 40px">Delete</th>

                                </tr>

                                </thead>
                                <tbody>
                                @foreach($comments as $rs)
                                    <tr>
                                        <th>{{$rs->id}}</th>
                                        <td><a href="{{route('product',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->comment}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td>
                                            <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                               onclick="return confirm('Deleting !! Are you sure?')">
                                                Delete
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



