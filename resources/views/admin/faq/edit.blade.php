@extends('layouts.adminbase')

@section('title','Edit FAQ :'.$data->title)

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
                    <h1>Edit FAQ: {{$data->title}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit FAQ</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">FAQ Elements</h3>
            </div>
            <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="basic-form">
                        <label>Question</label>
                        <input type="text" class="form-control" name="question" value="{{$data->question}}">
                    </div><br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Answer</label>
                        <textarea class="textarea" id='answer' name="answer">
                            {{$data->answer}}
                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#answer' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                    </div><br>


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

