<header class="header min-header" style="background-color:green;">
    <nav class="navbar navbar-expand-lg header-nav">
        <div class="navbar-header">
            <a id="mobile_btn" href="javascript:void(0);">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>
            <a href="/" class="navbar-brand logo">
                <h1 style="color: #fff"> IMS</h1>
            </a>
        </div>
        <div class="main-menu-wrapper">
            <div class="menu-header">
                <a href="index.html" class="menu-logo">
                    <img src="assets/img/logo.png" class="img-fluid" alt="Logo">
                </a>
                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <ul class="main-nav">

                <li class="">
                    <a href="/">HOME </a>

                </li>

                <li class="searchbar">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <div class="togglesearch" style="display: none;">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <button type="submit" class="btn btn-primary">search</button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        <ul class="nav header-navbar-rht">
            @guest
                <li><a href="{{ route('login') }}">Log in</a></li>
                <li><a href="{{ route('register') }}" class="login-btn">Signup</a></li>
            @else
                <li class="nav-item" style="padding-right: 15px; color: #fff;">
                    You are logged in as <strong style="padding-left: 5px;">{{ Auth::user()->name }}</strong>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="login-btn" style="">
                            Logout
                        </button>
                    </form>
                </li>
            @endguest
            <!-- Trigger Button to Open Modal -->
            <li class="course-amt">
                <a href="#" class="user-circle" data-bs-toggle="modal" data-bs-target="#bookedCoursesModal">
                    <img src="{{ asset('assets/img/course.png') }}" width="22" alt="Courses">
                </a>
                <a href="#" class="course" data-bs-toggle="modal" data-bs-target="#bookedCoursesModal">
                    <span>Courses</span>
                </a>
            </li>


        </ul>


    </nav>
</header>
<!-- /Header -->
