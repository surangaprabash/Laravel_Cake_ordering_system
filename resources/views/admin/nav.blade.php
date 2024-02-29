<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand me-auto" href="#">
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
                            <a id="act1" class="nav-link mx-lg-2" href="{{url('addcake')}}">Add Cake</a>
                        </li>
                        <li class="nav-item">
                            <a id="act2" class="nav-link mx-lg-2" aria-current="page" href="{{url('admin')}}">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a id="act3" class="nav-link mx-lg-2" href="{{url('home')}}">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="{{route('logout')}}" class="login-button ">LogOut</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End Navbar -->