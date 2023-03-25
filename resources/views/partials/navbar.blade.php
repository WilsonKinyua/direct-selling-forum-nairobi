<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ request()->is('about-us') ? 'active' : '' }}">
                    <a href="{{ route('about-us') }}" class="nav-link">About</a>
                </li>
                {{-- <li class="nav-item {{ request()->is('program') ? 'active' : '' }}">
                    <a href="{{ route('program') }}" class="nav-link">Program</a>
                </li>
                <li class="nav-item {{ request()->is('speakers') ? 'active' : '' }}">
                    <a href="{{ route('speakers') }}" class="nav-link">Speakers</a>
                </li> --}}
                <li class="nav-item {{ request()->is('contact-us') ? 'active' : '' }}">
                    <a href="{{ route('contact-us') }}" class="nav-link">Contact</a>
                </li>
                {{-- @auth
                    <li class="nav-item {{ request()->is('user/account') ? 'active' : '' }}">
                        <a href="{{ route('user.account') }}" class="nav-link btn bg-secondary text-white">Dashboard</a>
                    </li>
                @endauth --}}
                @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link register-btn">Register Now</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
