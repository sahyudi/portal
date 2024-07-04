  <!DOCTYPE html>
  <html lang="en">
  @include('content.meta')

  <body class="services-page">

      @include('content.header')


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
                                      <a href="/detail-layanan/{{ $service->slug }}" class="py-4"><span>Detail
                                          </span><i class="bi bi-arrow-right"></i></a>
                                  </p>
                              </div>
                          </div>
                      @endforeach
                  </div>
              </div>
          </section>
          <!-- /Services Section -->

      </main>

      @include('content.footer')

  </body>

  </html>
