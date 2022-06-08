<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}"><h2>Car Dealer <em>Website</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="cars.html">Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('reference')}}">References</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>

                    <li class="nav-item dropdown">
                        @auth
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                        @endauth
                        @guest
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                           <div class="dropdown-menu">
                           <a href="/login" class="dropdown-item">Login</a>
                           <a href="/registeruser" class="dropdown-item">Join</a>
                           </div>
                        @endguest
                        <div class="dropdown-menu">
                            <a href="/logout" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

