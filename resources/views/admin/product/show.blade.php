@extends('layouts.adminbase')

@section('title','Show Car :'.$data->title)

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
                    <a href="{{route('admin.product.edit',['id'=>$data->id])}}" class="btn btn-primary btn-app btn-info" style="width: 100px">Edit</a>
                    <a href="{{route('admin.product.destroy',['id'=>$data->id])}}" class="btn btn-primary btn-app btn-danger" style="width: 100px"
                       onclick="return confirm('Deleting !! Are you sure?')">Delete</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Show Car</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Detail Data</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table header-border table-hover verticle-middle">
                        <tr>
                            <th style="width: 200px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                            </td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Series</th>
                            <td>{{$data->series}}</td>
                        </tr>
                        <tr>
                            <th>Model</th>
                            <td>{{$data->model}}</td>
                        </tr>
                        <tr>
                            <th>Year</th>
                            <td>{{$data->year}}</td>
                        </tr>
                        <tr>
                            <th>Fuel</th>
                            <td>{{$data->fuel}}</td>
                        </tr>
                        <tr>
                            <th>Gear</th>
                            <td>{{$data->gear}}</td>
                        </tr>
                        <tr>
                            <th>Km</th>
                            <td>{{$data->km}}</td>
                        </tr>
                        <tr>
                            <th>Case Type</th>
                            <td>{{$data->casetype}}</td>
                        </tr>
                        <tr>
                            <th>Motor Power</th>
                            <td>{{$data->motorpower}}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{$data->color}}</td>
                        </tr>
                        <tr>
                            <th>Guarantee</th>
                            <td>{{$data->guarantee}}</td>
                        </tr>
                        <tr>
                            <th>Detail Information</th>
                            <td>{!! $data->detail !!}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                @if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </section>
    </div>






@endsection
