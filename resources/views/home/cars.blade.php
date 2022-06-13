@extends('layouts.frontbase')

@section('title','Cars | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))



@section('content')

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url({{asset('assetss')}}/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Cars</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="products">
    <div class="container">
        @php
            $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <div class="row">
            <div class="col-md-3">
                <ul class="category-list">
                @foreach($mainCategories as $rs)
                <div class="dropdown side-dropdown">

                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$rs->title}}</a>
                    <div class="dropdown side-menu">
                        @if(count($rs->children))
                            @include('home.categorytree',['children' => $rs->children])
                        @endif
                    </div>

                </div>
                @endforeach
                </ul>
            </div>

            <div class="col-md-9">
                <div class="row">
                    @foreach($productlist2 as $rs)
                    <div class="col-md-4">
                        <div class="product-item">
                            <div class="text-center">
                                <a href="{{route('product',['id'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}" style="width: 255px;height: 197px;text-align:center"></a>
                            </div>
                            <div class="down-content">
                                <a href="{{route('product',['id'=>$rs->id])}}"><h4>{{$rs->keywords}}</h4></a>
                                <h6><small><del>{{$rs->price}}</del></small>{{$rs->price*0.9}}$</h6>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript -->
<script src="{{asset('assetss')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assetss')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="{{asset('assetss')}}/js/custom.js"></script>
<script src="{{asset('assetss')}}/js/owl.js"></script>
</body>

</html>

@endsection
