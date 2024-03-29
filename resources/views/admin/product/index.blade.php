@extends('layouts.adminbase')

@section('title','Car List')

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <a href="{{route('admin.product.create')}}" class="btn btn-primary btn-app btn-lg" style="width: 200px">Add Car</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Car List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Car List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Keywords</th>
                                <th>Description</th>
                                <th>Series</th>
                                <th>Model</th>
                                <th>Price</th>
                                <th>Year</th>
                                <th>Fuel</th>
                                <th>Gear</th>
                                <th>KM</th>
                                <th>Case Type</th>
                                <th>Motor Power</th>
                                <th>Color</th>
                                <th>Guarantee</th>
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
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->series}}</td>
                                <td>{{$rs->model}}</td>
                                <td>{{$rs->price}}</td>
                                <td>{{$rs->year}}</td>
                                <td>{{$rs->fuel}}</td>
                                <td>{{$rs->gear}}</td>
                                <td>{{$rs->km}}</td>
                                <td>{{$rs->casetype}}</td>
                                <td>{{$rs->motorpower}}</td>
                                <td>{{$rs->color}}</td>
                                <td>{{$rs->guarantee}}</td>

                                <td>
                                    @if ($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assetss')}}/images/gallery.png" style="height: 40px">
                                    </a>
                                </td>
                                <td>{{$rs->status}} </td>
                                <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                    onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success btn-sm">Show</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
