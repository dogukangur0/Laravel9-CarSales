@extends('layouts.adminbase')

@section('title','Edit Product :'.$data->title)

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

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
                    <h1>Edit Product: {{$data->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Product</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Elements</h3>
            </div>
            <form role="form" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                        <label>Parent Product</label>
                        <select class="form-control" name="category_id">
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="basic-form">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div><br>

                    <div class="basic-form">
                        <label>Keywords</label>
                        <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                    </div><br>

                    <div class="basic-form">
                        <label>Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description">
                    </div><br>

                    <div class="basic-form">
                        <label>Series</label>
                        <input type="text" class="form-control" name="series" placeholder="Series">
                    </div><br>

                    <div class="basic-form">
                        <label>Model</label>
                        <input type="text" class="form-control" name="model" placeholder="Model">
                    </div><br>

                    <div class="basic-form">
                        <label>Price</label>
                        <input type="text" class="form-control" name="price">
                    </div><br>

                    <div class="basic-form">
                        <label>Year</label>
                        <input type="number" class="form-control" name="year" value="0">
                    </div><br>

                    <div class="form-group">
                        <label>Fuel</label>
                        <select class="form-control" name="fuel">
                            <option>Gasoline</option>
                            <option>Diesel</option>
                            <option>Gasoline&LPG</option>
                            <option>Electric</option>
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label>Gear</label>
                        <select class="form-control" name="gear">
                            <option>Automatic</option>
                            <option>Semi Automatic</option>
                            <option>Manuel</option>
                        </select>
                    </div><br>

                    <div class="basic-form">
                        <label>KM</label>
                        <input type="number" class="form-control" name="km" value="0">
                    </div><br>

                    <div class="form-group">
                        <label>Case Type</label>
                        <select class="form-control" name="casetype">
                            <option>Sedan</option>
                            <option>Hatchback</option>
                            <option>Station Wagon</option>
                            <option>Cabrio</option>
                            <option>SUV</option>
                        </select>
                    </div><br>

                    <div class="basic-form">
                        <label>Motor Power</label>
                        <input type="number" class="form-control" name="motorpower" value="0">
                    </div><br>

                    <div class="basic-form">
                        <label>Color</label>
                        <input type="text" class="form-control" name="color">
                    </div><br>

                    <div class="form-group">
                        <label>Guarantee</label>
                        <select class="form-control" name="guarantee">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail Information</label>
                        <textarea class="textarea" id='detail' name="detail">
                            {{$data->detail}}
                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div><br>

                    <div class="form-group">
                        <label for="exampleInputFile">Image</label>
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

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function (){
            $('.textarea').summernote()
        })
    </script>

@endsection

