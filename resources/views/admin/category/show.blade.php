@extends('layouts.adminbase')

@section('title','Show Category :'.$data->title)

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
                    <a href="{{route('admin.category.edit',['id'=>$data->id])}}" class="btn btn-primary btn-app btn-info" style="width: 100px">Edit</a>
                    <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" class="btn btn-primary btn-app btn-danger" style="width: 100px"
                       onclick="return confirm('Deleting !! Are you sure?')">Delete</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Show Category</li>
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
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td></td>
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
