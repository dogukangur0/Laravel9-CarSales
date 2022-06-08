<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assetss')}}/admin/images/favicon.png">
    <link href="{{asset('assetss')}}/admin/css/style.css" rel="stylesheet">

    <!-- Required vendors -->
    <script src="{{asset('assetss')}}/admin/vendor/global/global.min.js"></script>
    <script src="{{asset('assetss')}}/admin/js/quixnav-init.js"></script>
    <script src="{{asset('assetss')}}/admin/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="{{asset('assetss')}}/admin/vendor/raphael/raphael.min.js"></script>
    <script src="{{asset('assetss')}}/admin/vendor/morris/morris.min.js"></script>


    <script src="{{asset('assetss')}}/admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('assetss')}}/admin/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="{{asset('assetss')}}/admin/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="{{asset('assetss')}}/admin/vendor/flot/jquery.flot.js"></script>
    <script src="{{asset('assetss')}}/admin/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="{{asset('assetss')}}/admin/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="{{asset('assetss')}}/admin/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="{{asset('assetss')}}/admin/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="{{asset('assetss')}}/admin/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="{{asset('assetss')}}/admin/js/dashboard/dashboard-1.js"></script>



</head>

<body class="h-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                @include('home.messages')
                                <form action="{{route('loginadmincheck')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label><strong>Email</strong></label>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>Password</strong></label>
                                        <input type="password" name="password" class="form-control" value="Password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="form-check ml-2">
                                                <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="page-forgot-password.html">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Don't have an account? <a class="text-primary" href="/registeruser">Sign up</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Scripts
***********************************-->
</body>

</html>
