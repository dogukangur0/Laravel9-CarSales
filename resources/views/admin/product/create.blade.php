@extends('layouts.adminbase')

@section('title','Add Product')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
                    <h1>Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Product Elements</h3>
            </div>
            <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="from-group" style="height: 80px">
                        <label>Parent Product</label>
                        <select class="form-control" name="category_id">
                            @foreach($data as $rs){
                                <option value="{{$rs->id}}">{{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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
                        <label>Price</label>
                        <input type="number" class="form-control" name="price" value="0">
                    </div><br>

                    <div class="basic-form">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="quantity" value="0">
                    </div><br>

                    <div class="basic-form">
                        <label>Minimum Quantity</label>
                        <input type="number" class="form-control" name="minquantity" value="0">
                    </div><br>

                    <div class="basic-form">
                        <label>Tax %</label>
                        <input type="number" class="form-control" name="tax" value="0">
                    </div><br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Detail Information</label>
                        <textarea class="form-control" id='detail' name="detail"></textarea>
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
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label">Choose image file</label>
                        </div>
                    </div><br>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option>True</option>
                            <option>False</option>
                        </select>
                    </div><br>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </div>
@endsection
