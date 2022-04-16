<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <<title>@yield("title")</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assetss')}}/admin/images/favicon.png">
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="{{asset('assetss')}}/admin/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="{{asset('assetss')}}/admin/css/style.css" rel="stylesheet">


    @yield("head")
</head>
<body>

@yield('content')

@yield('foot')
</body>
</html>
