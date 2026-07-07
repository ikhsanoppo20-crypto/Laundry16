<!doctype html>
<html lang="en">
  <head>
    <title>Menu Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link rel="stylesheet" href="{{ asset('templatelogin') }}/css/style.css">

    <style>
      body {
        background-image: url('{{ asset('templatelogin') }}/images/bg.jpg');
        background-size: cover;
        background-position: center;
        font-family: 'Lato', sans-serif;
      }

      .navbar-custom {
        background-color: transparent;
        position: absolute;
        top: 0;
        width: 100%;
        z-index: 10;
        padding: 15px 30px;
      }

      .navbar-custom .btn-back {
        color: #fff;
        font-weight: bold;
        border: 2px solid #fff;
        border-radius: 30px;
        padding: 5px 20px;
        transition: 0.3s;
        text-decoration: none;
      }

      .navbar-custom .btn-back:hover {
        background-color: #fff;
        color: #333;
      }

      .login-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(12px);
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 0 25px rgba(0,0,0,0.3);
        color: #fff;
      }

      .form-control {
        border-radius: 30px;
        padding: 10px 20px;
        background-color: rgba(195, 195, 195, 0.9);
        border: none;
        color: #000;
      }

      .form-control::placeholder {
        color: #555;
      }

      .btn-login {
        border-radius: 30px;
        background-color: #eb4d47;
        border: none;
        color: #fff;
        font-weight: bold;
      }

      .btn-login:hover {
        background-color: #ff6e6e;
      }

      .alert-custom {
        background-color: rgba(255, 0, 0, 0.15);
        color: #800;
        padding: 8px 15px;
        font-size: 14px;
        border-radius: 10px;
        margin-bottom: 15px;
      }
    </style>
  </head>

  <body>

    <!-- Navbar Back -->
    <div class="navbar-custom">
      <a href="{{ url('/') }}" class="btn-back">Kembali</a>
    </div>

    <div class="d-flex justify-content-center align-items-center vh-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6">
            <div class="login-card text-center">
              <h2 class="mb-3 text-white"><b>Login</b></h2>
              <p class="mb-3">Masukkan email dan password untuk melanjutkan</p>

              {{-- Alert Error --}}
              @if(session('error'))
                <div class="alert-custom text-center">
                  {{ session('error') }}
                </div>
              @endif

              @if ($errors->any())
                <div class="alert-custom">
                  <ul class="mb-0 ps-3 text-start">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('login') }}" method="POST" class="text-start">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                </div>

                <div class="d-flex justify-content-between mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe" checked>
                    <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                  </div>
                  <a href="#" class="text-white text-decoration-underline">Lupa Password?</a>
                </div>

                <button type="submit" class="btn btn-login w-100 mb-3">MASUK</button>
              </form>

              <!-- Bagian pengganti Facebook & Twitter -->
              <p class="mt-4 text-white">
                Belum punya akun? 
                <a href="{{ route('register') }}" class="text-info text-decoration-underline">Daftar Sekarang</a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JS Files -->
    <script src="{{ asset('templatelogin') }}/js/jquery.min.js"></script>
    <script src="{{ asset('templatelogin') }}/js/popper.js"></script>
    <script src="{{ asset('templatelogin') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('templatelogin') }}/js/main.js"></script>
  </body>
</html>
