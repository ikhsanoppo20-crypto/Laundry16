<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Wash Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('templateperpus') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('templateperpus') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('templateperpus') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('templateperpus') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('templateperpus') }}/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('templateperpus') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('templateperpus') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('templateperpus') }}/css/main.css" rel="stylesheet">

  <!-- Inline CSS untuk animasi -->
  <style>
    @keyframes floating {
      0% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0px); }
    }

    .floating-image {
      width: 100%;
      animation: floating 3s ease-in-out infinite;
      border-radius: 10px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>

  <!-- Header -->
  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="{{ asset('templateperpus') }}/img/profil.png" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <div class="text-center mt-7">
        <h1 class="sitename">
          @auth
            Hallo,<br>
            <strong>{{ Auth::user()->name }} 🧺 </strong>
          @else
            Hallo Customer 🧺 
          @endauth
        </h1>
      </div>
    </a>

    <div class="social-links text-center">
   
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      
    </div>

    <!-- Nav -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ url('/home') }}" class="active"><i class="bi bi-house navicon"></i> Beranda</a></li>
        <li><a href="{{ url('/about') }}"><i class="bi bi-person navicon"></i> About</a></li>
        <li class="dropdown"><a href="#"><i class="bi bi-file-earmark-text navicon"></i> <span>Kelola Data</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>Data Pelanggan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/pelanggan') }}">Tampil Pelanggan</a></li>
                <li><a href="{{ url('/pelanggan/create') }}">Tambah Pelanggan</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Data Laundry</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/laundry') }}">Data Laundry</a></li>
                <li><a href="{{ url('/laundry/create') }}">Tambah Laundry</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Data Pembayaran</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ url('/pembayaran') }}">Data Pembayaran</a></li>
                <li><a href="{{ url('/pembayaran/create') }}">Tambah <br> Pembayaran</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Data Laporan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="{{ url('/pelanggan/laporan') }}">Laporan Data Pelanggan</a></li>
            <li><a href="{{ url('/laundry/laporan') }}">Laporan Data Laundry</a></li>
            <li><a href="{{ url('/pembayaran/laporan') }}">Laporan <br> Data Pembayaran</a></li>
          </ul>
        </li>

      

        <li><a href="{{ url('/contact') }}"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        <li>
          <a href="#" onclick="confirmLogout(event)">
            <i class="bi bi-box-arrow-right navicon"></i> Logout
          </a>
          
          <script>
            function confirmLogout(e) {
              e.preventDefault();
              if (confirm('Anda yakin ingin logout?')) {
                document.getElementById('logout-form').submit();
              }
            }
          </script>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>

        <!-- Gambar Animasi Laundry (Full Width) -->
        <li class="mt-4 px-4">
          <img src="{{ asset('templateperpus/img/orang gosok.gif') }}" alt="Orang Bergerak" class="floating-image">
        </li>

      </ul>
    </nav>
  </header>
  <!-- End Header -->

  <!-- Content -->
  <main class="main">
    @yield('content')
  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('templateperpus') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/aos/aos.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/typed.js/typed.umd.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('templateperpus') }}/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('templateperpus') }}/js/main.js"></script>

</body>
</html>