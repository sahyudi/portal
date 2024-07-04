  <!DOCTYPE html>
  <html lang="en">
  @include('content.meta')

  <body class="services-page">

      @include('content.header')


      <main class="main">


          <!-- Page Title -->
          <div class="page-title" data-aos="fade" style="background-image: url(assets/img/gedung-bida.png);">
              <div class="container position-relative">
                  <h1>{{ $article->judul }}</h1>
                  <nav class="breadcrumbs">
                      <ol>
                          <li><a href="/">Home</a></li>
                          <li><a href="/artikel">Artikel</a></li>
                          <li class="current">Detail Artikel</li>
                      </ol>
                  </nav>
              </div>
          </div><!-- End Page Title -->

          <!-- Service Details Section -->
          <section id="service-details" class="service-details section">

              <div class="container">

                  <div class="row gy-4">


                      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                          {{-- <img src="assets/img/service-details.jpg" alt="" class="img-fluid services-img"> --}}

                          <p>{!! $article->content !!}
                          </p>
                      </div>

                  </div>

              </div>

          </section><!-- /Service Details Section -->


      </main>
      @include('content.footer')

  </body>

  </html>
