<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{ route('home_page') }}">
                <img src="{{ asset('assets/frontend') }}/img/logo.png" class="logo-img" alt="">
            </a>
        </div>
        <!-- Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home_page') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">Rooms & Suites
                        <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="rooms.html" class="dropdown-item"><span>Rooms 1</span></a></li>
                        <li><a href="rooms2.html" class="dropdown-item"><span>Rooms 2</span></a></li>
                        <li><a href="rooms3.html" class="dropdown-item"><span>Rooms 3</span></a></li>
                        <li><a href="room-details.html" class="dropdown-item"><span>Room Details</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="restaurant.html">Restaurant</a></li>
                <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">Pages <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="services.html" class="dropdown-item"><span>Services</span></a></li>
                        <li><a href="facilities.html" class="dropdown-item"><span>Facilities</span></a></li>
                        <li><a href="gallery.html" class="dropdown-item"><span>Gallery</span></a></li>
                        <li><a href="team.html" class="dropdown-item"><span>Team</span></a></li>
                        <li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
                        <li><a href="careers.html" class="dropdown-item"><span>Careers</span></a></li>
                        <li><a href="faq.html" class="dropdown-item"><span>F.A.Qs</span></a></li>
                        <li class="dropdown-submenu dropdown">
                            <a class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false" href="#"><span>Other Pages <i
                                        class="ti-angle-right"></i></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="404.html" class="dropdown-item"><span>404 Page</span></a></li>
                                <li><a href="coming-soon.html" class="dropdown-item"><span>Coming Soon</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">News <i class="ti-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="news.html" class="dropdown-item"><span>News 1</span></a></li>
                        <li><a href="news2.html" class="dropdown-item"><span>News 2</span></a></li>
                        <li><a href="post.html" class="dropdown-item"><span>Post Page</span></a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="navbar-item">
                            <div class="button-container">
                                <div class="butn-dark">
                                    <a href="{{ url('/dashboard') }}"><span>Dashboard</span></a>
                                </div>
                            </div>
                        </li>
                    @else
                        <li class="navbar-item">
                            <div class="button-container">
                                <div class="butn-dark">
                                    <a href="{{ route('login') }}"><span>Login</span></a>
                                </div>
                                @if (Route::has('register'))
                                    <div class="butn-dark">
                                        <a href="{{ route('register') }}"><span>Register</span></a>
                                    </div>
                                @endif
                            </div>
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
