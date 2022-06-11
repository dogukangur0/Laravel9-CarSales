@extends('layouts.frontbase')

@section('title','My Cars')


@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-1-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>user cars</h4>
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
                <li class="active">/User Product</li>
            </ul>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="section-heading">
                        <h2>User Menu</h2>
                    </div>
                    @include('home.user.usermenu')
                </div>
                <div class="content-body">
                    <!-- row -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <a href="{{route('userpanel.product.create')}}" class="btn btn-primary btn-app btn-lg" style="width: 200px">Add Car</a>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="{{route('userpanel.index')}}">Home</a></li>
                                        <li class="breadcrumb-item active">Car List</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Product List</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Category</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Series</th>
                                            <th>Image</th>
                                            <th>Image Gallery</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                            <th style="width: 40px">Show</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($data as $rs)
                                            <tr>
                                                <th>{{$rs->id}}</th>
                                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                                <td>{{$rs->keywords}}</td>
                                                <td>{{$rs->description}}</td>
                                                <td>{{$rs->series}}</td>
                                                <td>
                                                    @if ($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('userpanel.image.index',['pid'=>$rs->id])}}"
                                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                        <img src="{{asset('assetss')}}/images/gallery.png" style="height: 40px">
                                                    </a>
                                                </td>
                                                <td>{{$rs->status}} </td>
                                                <td><a href="{{route('userpanel.product.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                                <td><a href="{{route('userpanel.product.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                                       onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                                <td><a href="{{route('userpanel.product.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success btn-sm">Show</a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

@endsection



