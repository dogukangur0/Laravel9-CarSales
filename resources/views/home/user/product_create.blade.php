@extends('layouts.frontbase')

@section('title','Add Car')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-1-1920x500.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>user comment</h4>
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
                <li class="active">/Add Car</li>
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
                <div class="col-md-9">
                    <div class="shipping-methods">
                        <div class="section-heading">
                            <h2>Add Car</h2>
                        </div>
                        <div class="input-checkbox">
                            <form role="form" action="{{route('userpanel.product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="from-group" style="height: 80px">
                                        <label>Parent Car</label>
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
                                            <option>New</option>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



