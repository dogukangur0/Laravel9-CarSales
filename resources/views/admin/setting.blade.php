@extends('layouts.adminbase')

@section('title','Settings')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3>Settings</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Settings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
            <section class="content">
                @csrf
                <div class="row">
                    <div class="card card-primary card-tabs col-12">
                        <div class="card-header p-0 pt-1">
                            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill" href="#custom-tabs-one-general" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-smtp-tab" role="tab" data-toggle="pill" href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-social-tab" role="tab" data-toggle="pill" href="#custom-tabs-one-social" role="tab" aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-aboutus-tab" role="tab" data-toggle="pill" href="#custom-tabs-one-aboutus" role="tab" aria-controls="custom-tabs-one-aboutus" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-contact-tab" role="tab" data-toggle="pill" href="#custom-tabs-one-contact" role="tab" aria-controls="custom-tabs-one-contact" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-reference-tab" role="tab" data-toggle="pill" href="#custom-tabs-one-reference" role="tab" aria-controls="custom-tabs-one-reference" aria-selected="false">References</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-one-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-one-general" role="tabpanel" aria-labelledby="custom-tabs-one-general-tab">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" id="description" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" id="company" name="company" value="{{$data->company}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" id="address" name="address" value="{{$data->address}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" name="status" style="">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Icon</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="icon">
                                                <label class="custom-file-label">Choose Icon File</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp">
                                    <div class="form-group">
                                        <label>Smtp Server</label>
                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Email</label>
                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtp Password</label>
                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtpport</label>
                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-aboutus" role="tabpanel" aria-labelledby="custom-tabs-one-aboutus">
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#aboutus' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#contact' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-one-reference" role="tabpanel" aria-labelledby="custom-tabs-one-reference">
                                    <div class="form-group">
                                        <label>Reference</label>
                                        <textarea id="reference" name="reference">{{$data->reference}}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#reference' ) )
                                                .then( editor => {
                                                    console.log( editor );
                                                } )
                                                .catch( error => {
                                                    console.error( error );
                                                } );
                                        </script>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>
                        </div>
                    </div>

                </div>
            </section>
        </form>
    </div>
@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#aboutus').summernote();
            $('#contact').summernote();
            $('#reference').summernote();
        });
    </script>

@endsection
