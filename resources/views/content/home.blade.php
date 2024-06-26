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

<body class="index-page">


    @include('content.header')

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <img src="assets/img/gedung-bida.png" alt="" class="hero-bg" data-aos="fade-in">
            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">Portal LMS Online</h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Portal LMS Online ada sebuah website informasi publik
                            Layanan Perizinan Pertanahan yang di terbitkan oleh BP Batam
                        </p>
                        <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                            data-aos-delay="200">
                            <input type="text" class="form-control" placeholder="No registrasi">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>
                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="14"
                                        data-purecounter-duration="0" class="purecounter">14</span>
                                    <p>Perizinan</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0"
                                        data-purecounter-end="1100"data-purecounter-duration="0"
                                        class="purecounter">1100</span>
                                    <p>Views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-globe-asia-australia"></i></div>
                        <div>
                            <h4 class="title">Wilayah Pengembangan</h4>
                            <p class="description">Adalah batas wilayah kerja BP Batam</p>
                            <a href="https://www.google.com/maps/d/u/0/viewer?mid=1GcMeggziBR5GgCzEZGnQveSfWdBNYELq&ll=1.2581573182622303%2C104.49943261432942&z=9"
                                target="_blank" class="readmore stretched-link"><span>Learn More</span>
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-list-ol"></i></div>
                        <div>
                            <h4 class="title">Daftar Layanan</h4>
                            <p class="description">Layanan perizinan pertanahan yang diterbitkan Oleh BP Batam</p>
                            <a href="/services" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-calculator"></i></div>
                        <div>
                            <h4 class="title">Kalkulator UWT</h4>
                            <p class="description">Perhitungan tarif biaya Uang Wajib Tahun</p>
                            <a href="https://lms.bpbatam.go.id/portal/kalkulatoruwt/" target="_blank"
                                class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start order-lg-last order-first"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/kantor-bpbatam.jpg" class="img-fluid" alt="">
                        <a href="https://www.youtube.com/watch?v=axNcv1H4C40" class="glightbox play-btn"></a>
                    </div>

                    <div class="col-lg-6 content order-last  order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang BP Batam</h3>
                        <p>
                            Badan Pengusahaan Kawasan Perdagangan Bebas dan Pelabuhan Bebas Batam (BP Batam) adalah
                            lembaga/instansi pemerintah pusat yang dibentuk berdasarkan Peraturan Pemerintah Republik
                            Indonesia Nomor 46 Tahun 2007 dengan tugas dan wewenang melaksanakan pengelolaan,
                            pengembangan dan pembangunan kawasan sesuai dengan fungsi-fungsi kawasan.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <span>Layanan Pertanahan<br></span>
                <h2>Layanan Pertanahan</h2>
                <p>Daftar Layanan Pertanahan</p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    @foreach ($services as $key => $service)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <h3 class="mt-3">{{ $service->judul }}</h3>
                                <p>{{ $service->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center mt-3" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <a class="btn btn-primary" href="/services">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <div class="container section-title" data-aos="fade-up">
                <span>Pertanyaan Umum</span>
                <h2>Pertanyaan Umum</h2>
                <p>Pertanyaan yang sering ditanyakan oleh pemohon</p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">
                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Cara Cek Status Permohonan</h3>
                                <div class="faq-content">
                                    <p>
                                        Untuk mengetahui status permohonan izin yang diajukan dapat diketahui dengan
                                        cara monitoring melalui menu <b>Layanan &gt; <a
                                                href="https://lms.bpbatam.go.id/portal/tracking" target="_blank">Lacak
                                                Permohonan</a></b><b> </b>pada portal LMS Online V3<br></p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Cara Pengajuan Perpanjangan UWT / WTO</h3>
                                <div class="faq-content">
                                    <p><a href="https://www.youtube.com/watch?v=axNcv1H4C40"
                                            target="_blank">https://www.youtube.com/watch?v=axNcv1H4C40</a><br></p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Pengajuan permohonan di LMS Online</h3>
                                <div class="faq-content">
                                    <p>Cara pengajukan permohonan di LMS Online yaitu masuk ke menu Permohonan, klik
                                        <b>[Tambah Baru]</b> kemudian pilih perijinan yang akan diajukan. <br>Untuk
                                        mempermudah proses upload dokumen persyaratan saat membuat permohonan maka
                                        sebelumnya dapat menginputkan dan upload semua dokumen persyaratan di menu
                                        <b>Dokumen Pendukung.</b>
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Faq Section -->

    </main>

    @include('content.footer')

</body>

</html>
