@extends('layouts.adminbase')

@section('title','Comment & Reviews List')

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

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Comment List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Comment List</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>
                                <th>Name</th>
                                <th>Product</th>
                                <th>Subject</th>
                                <th>Comment</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Show</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <th>{{$rs->id}}</th>
                                <td><a href="{{route('admin.product.show',['id'=>$rs->product_id])}}">{{$rs->product->title}}</a></td>
                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->comment}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>
                                <td>
                                    <a href="{{route('admin.comment.destroy',['id'=>$rs->id])}}" class="btn btn-primary btn-danger btn-sm"
                                    onclick="return confirm('Deleting !! Are you sure?')">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-primary btn-success btn-sm"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>

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
