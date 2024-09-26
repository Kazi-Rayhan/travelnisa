<nav class="navbar navbar-expand-lg">
    <div class="container">

        <div class="logo-wrapper">
            <a class="logo" href="{{ route('home_page') }}">
                <img src="{{ Settings::setting('logo') }}" class="logo-img" alt="Logo">
            </a>
        </div>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="ti-menu"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home_page') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('hotels') }}">Hotels</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('abouts') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faq_page') }}">F.A.Qs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact_page') }}">Contact</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <div class="button-container">
                            <div class="butn-dark">
                                <a href="{{ route('user.dashboard') }}"><span>Dashboard</span></a>
                            </div>
                        </div>
                    @else
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
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
