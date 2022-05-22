@extends('layouts.adminwindow')

@section('title','Show Message :'.$data->title)

@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-header">
        <!-- row -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Message</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-hover vertical-middle">
                            <tr>
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name & Surname</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone Number</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Ip Number</th>
                                <td>{{$data->ip}}</td>
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
                            <tr>
                                <th>Admin Note</th>
                                <td>
                                    <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" metod="post">
                                        @csrf
                                        <textarea class="textarea" cols="100" id="note" name="note">
                                            {{$data->note}}
                                        </textarea>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Note</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
