 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center">

         <a href="/" class="logo d-flex align-items-center me-auto">
             <h1 class="sitename">Portal</h1>
         </a>
         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="/" class="active">Beranda<br></a></li>
                 <li><a href="/layanan">Layanan</a></li>
                 {{-- <li><a href="/informations">Informasi</a></li> --}}
                 <li><a href="/kontak-kami">Kontak Kami</a></li>
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>
         @if (Route::has('login'))
             @auth
                 <a class="btn-getstarted" href="{{ url('/dashboard') }}">Dashboard</a>
             @else
                 <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
             @endauth
         @endif
     </div>
 </header>
