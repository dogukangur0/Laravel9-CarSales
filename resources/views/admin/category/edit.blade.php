@extends('layouts.adminbase')

@section('title','Edit Category :'.$data->title)

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
                    <h1>Edit Category: {{$data->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Category</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category Elements</h3>
            </div>
            <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control" name="parent_id">
                            <option value="0" selected="selected">Main Category</option>
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="basic-form">
                            <label>Title</label>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                            </div>
                    </div>

                    <div class="basic-form">
                        <label>Keywords</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                        </div>
                    </div>

                    <div class="basic-form">
                        <label>Description</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exapmleInputFile">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label">Choose image file</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Data</button>
                        </div>
                    </div>





                </div>
            </form>
        </div>
    </section>
    </div>






@endsection
