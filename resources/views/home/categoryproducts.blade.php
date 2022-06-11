@extends('layouts.frontbase')

@section('title',$category->title . ' Cars')

@section('content')
    <br>
    <br>
    <br>
    <br>

    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">/{{$category->title}}</li>
            </ul>
        </div>
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $rs)
                <div class="col-md-6">
                    <div class="row">
                        <div class="product-item">
                            <a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 255px;height: 197px;text-align:center" alt=""></a>
                            <div class="down-content">
                                <a href="{{route('product',['id'=>$rs->id])}}"><p2>{{$rs->description}}</p2></a>
                                <h6><small><del>{{$rs->price}}</del></small>{{$rs->price*0.9}}$</h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
