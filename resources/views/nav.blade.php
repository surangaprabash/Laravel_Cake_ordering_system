
<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="{{ url('/') }}">
                <img src="/images/Bakery-Logo.png" class="navbar-logo" width="95" height="60" alt="">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Bakery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a id="act1" class="nav-link mx-lg-2" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="act2" class="nav-link mx-lg-2" href="{{ url('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a id="act3" class="nav-link mx-lg-2" href="{{ url('service') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a id="act4" class="nav-link mx-lg-2" href="{{ url('contact') }}">Contact</a>
                        </li>
                        @if (isset(Auth::user()->id) && Auth::user()->usertype=='admin') 
                            <li class="nav-item">
                                <a id="act5" class="nav-link mx-lg-2" href="{{ url('admin') }}">Dashboard</a>
                            </li>
                        @elseif(isset(Auth::user()->id)) 
                            <li class="nav-item">
                                <a id="act5" class="nav-link mx-lg-2" href="{{ url('myOrder') }}">My Order</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            @if (isset(Auth::user()->id)) 
           
            <div class="dropdown profile">
                <h3 class="h3 me-2">{{ Auth::user()->name}}</h3>

                <div class="container px-4 dropdown-content">
                    <div class="row gx-5">
                        <a href="{{route('profile')}}" class="link">
                            <div class="col">
                                <div class="p-3">Profile</div>
                            </div>
                        </a>
                        <a href="{{route('logout')}}" class="link">
                            <div class="col">
                                <div class="p-3">LogOut</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            @else

            <a href="{{url('login')}}" class="login-button">Login</a>
            <a href="{{url('register')}}" class="register-button">Register</a>

            @endif
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->
