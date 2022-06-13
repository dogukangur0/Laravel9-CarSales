<!--**********************************
            Sidebar start
        ***********************************-->
<div class="quixnav">
    <div class="quixnav-scroll ps ps--active-y mm-active">
        <ul class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img class="media-object mr-3" src="{{asset('assetss')}}/admin/images/avatar/1.png" class="img-circle elevation-2">
            </div>
            <div class="info midtext">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </ul>
        <ul class="metismenu mm-show" id="menu">

            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->
            <li><a href="/admin" aria-expanded="false"><i class="fa fa-user"></i><span class="nav-text">Dashboard</span></a></li>


            <li><a href="/admin/category" aria-expanded="false"><i class="fa fa-list-ul"></i><span class="nav-text">Categories</span></a></li>
            <li><a href="/admin/product" aria-expanded="false"><i class="fa fa-product-hunt"></i><span class="nav-text">Products</span></a></li>
            <li><a href="/admin/comment" aria-expanded="false"><i class="fa fa-comment"></i><span class="nav-text">Comments</span></a></li>
            <li><a href="{{route('admin.faq.index')}}" aria-expanded="false"><i class="icon icon-alert-circle-exc"></i><span class="nav-text">FAQ</span></a></li>
            <li><a href="{{route('admin.message.index')}}" aria-expanded="false"><i class="icon icon-email-84 text-info"></i><span class="nav-text">Messages</span></a></li>
            <li><a href="/admin/user" aria-expanded="false"><i class="icon icon-users-mm-2 text-danger"></i><span class="nav-text">Users</span></a></li>
            <li><a href="/admin/social" aria-expanded="false"><i class="fa fa-mobile-phone"></i><span class="nav-text">Social</span></a></li>

            <li class="nav-label first">LABELS</li>
            <li class="nav-items">
                <a href="/admin/setting" aria-expanded="false"><i class="icon icon-settings-gear-64"></i><span class="nav-text">Settings</span></a></li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: -270px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 270px; height: 642px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 112px; height: 267px;"></div>
        </div>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->

