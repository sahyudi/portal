<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }} &mdash; Portal LMS Online</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Logis
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Updated: Jun 14 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="services-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Portal</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/">Beranda<br></a></li>
                    <li><a href="/services" class="active">Layanan</a></li>
                    {{-- <li><a href="/informations">Informasi</a></li> --}}
                    <li><a href="/contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            {{-- <a class="btn-getstarted" href="https://lms.bpbatam.go.id/apps/" target="_blank">Register</a> --}}

        </div>
    </header>


    <main class="main">

        <!-- Page Title -->
        <div class="page-title" data-aos="fade" style="background-image: url(assets/img/gedung-bida.png);">
            <div class="container position-relative">
                <h1>Layanan</h1>
                <p>Daftar layanan perizinan pertanahan yang diterbitkan oleh BP Batam.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="/">Beranda</a></li>
                        <li class="current">Services</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->


        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($services as $key => $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <h3 class="mt-3">{{ $service->judul }}</h3>
                                <p>{{ $service->deskripsi }}</p>
                                <p>
                                    <a href="/service/{{ $service->slug }}" class="py-4"><span>Detail </span><i
                                            class="bi bi-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Services Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Portal LMS Online</span>
                    </a>
                    <p>Portal LMS Online ada sebuah website informasi publik Layanan Perizinan Pertanahan yang di
                        terbitkan oleh BP Batam</p>
                    <div class="social-links d-flex mt-4">
                        <a href="https://twitter.com/bp_batam"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.facebook.com/badanpengusahaanbatam/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/bpbatam/"><i class="bi bi-instagram"></i></a>
                        {{-- <a href=""><i class="bi bi-linkedin"></i></a> --}}
                    </div>
                </div>

                <div class="col-lg-3 col-6 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/services">Layanan</a></li>
                        {{-- <li><a href="/informations">Informasi</a></li> --}}
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                {{-- 
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        Jl. Jenderal Ibnu Sutowo No. 1 Batam Centre
                    </p>
                    <p>Batam, Kepulauan Riau,</p>
                    <p>Indonesia</p>
                    <p class="mt-4"><strong>Phone:</strong> <span> +62778-462 047 / 462 048</span></p>
                    <p><strong>Email:</strong> <span> humas@bpbatam.go.id</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Logis</strong> <span>All Rights Reserved</span>
            </p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>


    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
