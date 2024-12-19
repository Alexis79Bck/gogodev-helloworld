<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('landing.about') }}" class="nav-item nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}">About</a>
            <a href="{{ route('landing.services') }}" class="nav-item nav-link {{ request()->routeIs('landing.services') ? 'active' : '' }}">Service</a>
            <a href="{{ route('landing.projects') }}" class="nav-item nav-link {{ request()->routeIs('landing.projects') ? 'active' : '' }}">Projects</a>
            <a href="{{ route('landing.blog') }}" class="nav-item nav-link {{ request()->routeIs('landing.blog') ? 'active' : '' }}">Blog</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            <a href="{{ route('landing.contact') }}" class="nav-item nav-link {{ request()->routeIs('landing.contact') ? 'active' : '' }}">Contact Us</a>
        </div>
        {{-- <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a> --}}
    </div>
</nav>