<header class="py-2 position-fixed top-0 w-100" style="z-index: 1030;">
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo Section -->
            <div class="logo w-30">
                <a>
                    <img src="" alt="Logo" />
                </a>
            </div>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark"
                aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Navbar -->
            <div class="collapse navbar-collapse show w-70 d-flex align-items-center justify-content-end" id="navbarDark">
                <ul class="navbar-nav justify-content-between p-0 mb-2 mb-xl-0 fs-5 p-2 text-center w-60">
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-secondary" href="#">Main</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-secondary" href="#">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-secondary" href="#">Contacts</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-secondary" href="#">Blog</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-secondary" href="#">FAQs</a>
                    </li>
                </ul>

                <!-- Authentication Buttons -->
                <div class="auth-buttons w-30">
                    <ul class="navbar-nav d-flex justify-content-end">
                        @if (Auth::check())
                            <!-- If the user is authenticated -->
                            <li class="nav-item btn btn-primary border-0 me-3">
                                <a href="{{ url('/dashboard') }}" class="btn-dashboard">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item btn btn-primary border-0 me-3">
                                <a href="{{ route('login') }}" class="btn-signin">Sign In</a>
                            </li>
                            <li class="nav-item btn btn-primary border-0 me-3">
                                <a href="{{ route('register') }}" class="btn-signup">Sign Up</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>