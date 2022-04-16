@extends('layouts.adminwindow')

@section('title','Product Image Gallery')

@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<h3>{{$product->title}}</h3>
    <hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose file</label>
            </div>
            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="Upload">
            </div>
        </div>

    </form>

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Product Image List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th style="width: 40px">Delete</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <th>{{$rs->id}}</th>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection

