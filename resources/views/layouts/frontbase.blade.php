<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="Dogukan GUR">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">

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
