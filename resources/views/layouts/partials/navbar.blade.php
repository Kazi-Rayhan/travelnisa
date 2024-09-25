@php
$setting=App\Models\Setting::where('id',1)->first();
@endphp
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper">
            <a class="logo" href="{{ route('home_page') }}">
                <img src="{{ Storage::url($setting->site_logo) }}" class="logo-img" alt="">
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
                <li class="nav-item"><a class="nav-link" href="#">Hotels</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('faq_page') }}">F.A.Qs</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="navbar-item">
                            <div class="button-container">
                                <div class="butn-dark">
                                    <a href="{{ route('user.dashboard') }}"><span>Dashboard</span></a>
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
