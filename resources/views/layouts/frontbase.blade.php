<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('assetss')}}/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield("title")</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assetss')}}/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('assetss')}}/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/css/owl.css">

    @yield("head")
</head>

<body>
@include("home.header")

@section('slider')

@show

@section('sidebar')
    @include("home.sidebar")
@show

<div class="container">
    @yield('content')
</div>

@include("home.footer")
@yield('foot')
</body>
</html>
