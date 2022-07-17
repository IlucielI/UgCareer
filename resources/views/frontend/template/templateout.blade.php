<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UG Career Center | @yield('title') </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/1ad5fe4206.js"></script>
    @yield('css')
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="index.html"><img src="{{ asset('assets') }}/img/careercenterlogo.png" class="img-fluid"
                            alt="" data-aos="zoom-in" data-aos-delay="300"></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="{{ asset('assets') }}/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif"
                            href="{{ route('home') }}">Home</a></li>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif" href="#about">Find
                            Jobs</a></li>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif"
                            href="#services">Events</a></li>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif"
                            href="#portfolio">News</a></li>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif"
                            href="#portfolio">Forums</a></li>
                    <li><a class="nav-link scrollto @if (Request::segment(1) == '') active @endif"
                            href="#contact">Contact</a></li>
                    <li class="dropdown"><a href="#"
                            class="nav-link scrollto @if (Request::segment(1) == 'certification') active @endif"><span>About</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#"
                                    class="nav-link scrollto @if (Request::segment(1) == 'tracer') active @endif">Tracer
                                    Study</a></li>
                            <li><a href="{{ route('certificate.front.index') }}"
                                    class="nav-link scrollto @if (Request::segment(1) == 'certification') active @endif">Certification
                                    Acreditations</a></li>
                        </ul>
                    </li>
                    @guest
                        @yield('profileorlogin')
                    @else
                        <li class="dropdown">
                            <span class="avatar avatar-sm rounded-circle"><img alt="Avatar" class=""
                                    style="height:50px" src="{{ asset('assets') }}/img/user.png"></span>
                            <ul>
                                <li> <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @username
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Account Settings</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logut</a>
                            </div>
                        </li>
                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="">
        <div class="container">
            <div class="col-lg-12 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright <strong>UG Career Center</strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @yield('optionaljs')
    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>
    @yield('scripts')
</body>

</html>
