@extends('layouts.adminbase')

@section('title','Add Category')

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
                    <h1>Add Category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Category Elements</h3>
            </div>
            <form role="form" action="/admin/category/store" method="post">
                @csrf
                <div class="card-body">

                    <div class="basic-form">
                            <label>Title</label>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                            </div>
                    </div>

                    <div class="basic-form">
                        <label>Keywords</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                        </div>
                    </div>

                    <div class="basic-form">
                        <label>Description</label>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" placeholder="Description">
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
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                    </div>

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
