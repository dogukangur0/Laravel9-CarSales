<!-- Page Content -->
<!-- Banner Starts Here -->


    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
            @foreach($sliderdata as $rs)
                <a href="{{route('product',['id'=>$rs->id])}}">
                <div class="text-center">
                    <img src="{{Storage::url($rs->image)}}" style="width: 1520px;height: 650px">
                    <div class="col-start-12" style="color:white">
                        <div class="text-content" style="color:black">
                            <h1>{{$rs->title}}</h1>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



<!-- Banner Ends Here -->
