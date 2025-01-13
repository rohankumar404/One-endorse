<header class="py-2 position-fixed top-0 w-100">
    <nav class="navbar navbar-expand-xl">
        <div class="container tab-rest">
            <!-- Logo Section -->
            <div class="logo w-30">
                <a href="/">
                    <img src="../assets/img/images/logo.png" alt="Logo" style="width: 80px;" />
                </a>
            </div>

            <!-- Navbar Toggler for Mobile -->
            <button class="navbar-toggler border-0" type="button">
                <span class="navbar-toggler border-0"><img src="../assets/img/icon/toggel.png" alt=""></span>
            </button>

            <!-- Collapsible Navbar -->
            <div class="collapse navbar-collapse d-flex align-items-center" id="navbarDark">
                <ul class="navbar-nav justify-content-between p-0 mb-2 mb-xl-0 fs-5 p-2 text-center w-70">
                    <li class="nav-item me-3">
                        <a class="nav-link menus shadow-buttom btn-secondary uppercase" href="/">Main</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link menus shadow-buttom btn-secondary uppercase" href="/about">About</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link menus shadow-buttom btn-secondary uppercase" href="/contact">Contacts</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link menus shadow-buttom btn-secondary uppercase" href="/blogs">Blog</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link menus shadow-buttom btn-secondary uppercase" href="/faqs">FAQs</a>
                    </li>
                </ul>

                <!-- Authentication Buttons -->
                <div class="auth-buttons w-30">
                    <ul class="navbar-nav d-flex justify-content-end">
                        <li class="nav-item border-0 me-3">
                            <a href="{{ route('login') }}" class="nav-link uppercase btn-primary menus btn-signin">Sign In</a>
                        </li>
                        <li class="nav-item border-0">
                            <a href="{{ route('register') }}" class="nav-link uppercase btn-primary menus btn-signup">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggler = document.querySelector('.navbar-toggler');
        const navbar = document.querySelector('#navbarDark');

        toggler.addEventListener('click', function () {
            navbar.classList.toggle('show');
        });
    });
</script>

<!-- CSS -->
<style>
    @media(min-width: 992px) and (max-width:1199px){
        .tab-rest{
            flex-wrap: nowrap !important;
        }
        .logo{
            max-width: 16% !important;
        }
        .auth-buttons{
        margin-bottom: 9px;
        }

    }
    .collapse {
        transition: max-height 0.3s ease;
        overflow: hidden;
        @media(max-width:510px){display: block !important;}
    }    

    /* Large screens: Ensure the menu is always visible */
    @media (min-width: 992px) {
        .collapse {
            display: flex !important;
            max-height: none !important;
            overflow: visible !important;            
        }

        .navbar-toggler {
            display: none;
        }
    }

    /* Medium and small screens: Hide menu by default */
    @media (max-width: 991.98px) {
        .collapse {
            display: none; /* Menu hidden by default */
            max-height: 0;
        }

        .collapse.show {
            display: block; /* Show menu when toggled */
            max-height: 500px; /* Adjust as per content height */
        }

        .navbar-toggler {
            display: block; /* Ensure toggle button is visible */
        }
        .navbar-nav{
            align-items: start;
            padding: 0 !important;
        }
        .navbar-nav li{
            min-width: 145px;
        }
    }

    /* Style adjustments for better UI */
    .navbar-nav {
        flex-direction: column;
        gap: 10px;
        @media(min-width: 992px) and (max-width:1199px){flex-direction: row !important;}
    }

    .navbar-nav li {
        margin: 0; /* Reset margin */
    }
</style>
