@extends('layouts.adminbase')

@section('title','Category List')

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
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary btn-app btn-lg" style="width: 200px">Add Category</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Category List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Category List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Parent</th>
                                <th>Title</th>
                                <th>Image</th>
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
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td>{{$rs->status}} </td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}" class="btn btn-primary btn-sm">Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                    <td><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success btn-sm">Show</a></td>
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

