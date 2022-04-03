@extends('layouts.frontbase')

@section('title','Title from sub file')

@section('sidebar')
    @parent


    <p>This is appended from sub file</p>
@endsection

@section('content')
    <p1>This is my body content.</p1>
@endsection
