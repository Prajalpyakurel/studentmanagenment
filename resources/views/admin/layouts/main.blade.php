<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <!-- Favicons -->
    <link href="{{ asset('admin/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <!-- Include Bootstrap CSS (if not already included) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap JS and Popper.js (for dropdowns) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>

</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('admin.home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('admin/img/logo.png') }}" alt="">
                <span class="d-none d-lg-block"> IMS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->
        <style>
            /* Additional styles for hover effects */
            .nav-link {
                padding: 10px 20px;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s, transform 0.3s, box-shadow 0.3s;
            }

            .nav-link:hover {
                background-color: #f0f0f0;
                color: #007bff;
                transform: translateY(-5px);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
        </style>
        <div class="search-bar">
            <div class="container">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.courses.index') }}">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.admissions.index') }}">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.receipts.index') }}">Receipt</a>
                    </li>
                </ul>
            </div>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">




            <!-- Logout Button -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-flex" sty>
                @csrf
                <button type="submit" class="btn btn-danger" style="margin-right: 142px;">Logout</button>
            </form>



            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link " href="{{ route('admin.cashflows.index') }}">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>CashFlow</span>
                </a>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="">
                    <i class="bi bi-journal-text"></i><span>IMS</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('admin.courses.index') }}">
                            <i class="bi bi-circle"></i><span>Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.admissions.index') }}">
                            <i class="bi bi-circle"></i><span>Admission</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.receipts.index') }}">
                            <i class="bi bi-circle"></i><span>Receipt</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('admin.bookings.index')}}">
                            <i class="bi bi-circle"></i><span>Booking</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->


            {{-- start of website managenment --}}



            {{-- end of website managenment --}}





        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            @yield('content')
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('admin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('admin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <!-- Include your JS files here -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>