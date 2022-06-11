@extends('layouts.frontbase')

@section('title','Show Car')

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
                <li class="active">/Show Car</li>
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
                            <h2>Show Car</h2>
                        </div>
                        <div class="input-checkbox">
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
            </div>
        </div>
    </div>

@endsection



