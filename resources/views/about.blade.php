@extends('layouts.laundry')

@section('content')

<style>
  body {
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('{{ asset('templateperpus/img/latar.png') }}') center center / cover no-repeat fixed;
  }

  .about-card {
    background: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);
    border-radius: 20px;
    padding: 50px;
    margin-top: 80px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    color: #333;
  }

  .about-card h2 {
    font-weight: 700;
    color: #3e2f26;
    margin-bottom: 25px;
    text-align: center;
  }

  .about-card ul {
    padding-left: 20px;
  }

  .about-card ul li {
    margin-bottom: 12px;
    font-size: 16px;
  }

  .about-card p {
    font-size: 15px;
    line-height: 1.8;
  }

  .carousel-fasilitas img {
    border-radius: 15px;
    max-height: 400px;
    object-fit: cover;
    width: 100%;
  }

  .review-card {
    background: #fff;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    height: 100%;
  }

  .review-card h6 {
    font-weight: 600;
  }

  .review-card .stars {
    color: #ffc107;
    margin-bottom: 10px;
  }

  .review-card p {
    font-style: italic;
    color: #555;
    margin-bottom: 0;
  }

  .user-avatar {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    object-fit: cover;
  }
</style>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">

      <div class="about-card">

        <h2>Tentang Sistem Informasi Laundry</h2>

        <p>
          Website ini merupakan <strong>Sistem Informasi Laundry</strong>
          yang dirancang untuk membantu proses pengelolaan usaha laundry
          secara lebih cepat, mudah, dan terorganisir.
        </p>

        <p>
          Sistem ini memudahkan admin dalam mengelola data pelanggan,
          transaksi laundry, pembayaran, serta pembuatan laporan secara
          otomatis sehingga pekerjaan menjadi lebih efisien dan akurat.
        </p>

        <p>
          Dengan tampilan yang sederhana dan user-friendly, aplikasi ini
          dapat membantu proses pencatatan laundry mulai dari penerimaan
          cucian, proses pencucian, penyelesaian pesanan, hingga pembayaran
          pelanggan.
        </p>

        <h5 class="mt-4">Fitur Unggulan:</h5>

        <ul>
          <li>Manajemen Data Pelanggan</li>
          <li>Manajemen Data Laundry</li>
          <li>Pengelolaan Data Pembayaran</li>
          <li>Laporan Transaksi Laundry</li>
          <li>Pencarian Data yang Cepat</li>
          <li>User-friendly Interface</li>
        </ul>

        <p class="mt-4">
          Sistem Informasi Laundry hadir sebagai solusi digital untuk
          meningkatkan kualitas pelayanan, mempercepat proses administrasi,
          dan membantu pengelolaan usaha laundry menjadi lebih profesional.
        </p>

        <!-- Fasilitas Laundry -->
        <div class="mt-5">
          <h4 class="text-center mb-4">🧺 Fasilitas Laundry</h4>

          <div id="carouselLaundry" class="carousel slide carousel-fasilitas" data-bs-ride="carousel">

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img src="{{ asset('templatelaundry/img/ruangan baju.jpeg') }}" class="d-block w-100">
              </div>

              <div class="carousel-item">
                <img src="{{ asset('templatelaundry/img/setrika.jpeg') }}" class="d-block w-100">
              </div>

              <div class="carousel-item">
                <img src="{{ asset('templatelaundry/img/tempat baju.jpeg') }}" class="d-block w-100">
              </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLaundry" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselLaundry" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>

          </div>
        </div>

        <!-- Komentar -->
        <div class="mt-5">

          <h4 class="text-center mb-4">💬 Komentar Pelanggan</h4>

          <div class="row g-4">

            <div class="col-md-6">
              <div class="review-card d-flex gap-3">
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" class="user-avatar">
                <div>
                  <h6>Andi Prasetyo</h6>
                  <div class="stars">⭐⭐⭐⭐⭐</div>
                  <p>"Pelayanannya cepat dan hasil laundry sangat bersih serta wangi."</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="review-card d-flex gap-3">
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" class="user-avatar">
                <div>
                  <h6>Siti Aminah</h6>
                  <div class="stars">⭐⭐⭐⭐⭐</div>
                  <p>"Aplikasi ini memudahkan pengelolaan data laundry dan pembayaran."</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="review-card d-flex gap-3">
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" class="user-avatar">
                <div>
                  <h6>Budi Santoso</h6>
                  <div class="stars">⭐⭐⭐⭐⭐</div>
                  <p>"Pencatatan transaksi menjadi lebih rapi dan laporan mudah dibuat."</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="review-card d-flex gap-3">
                <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" class="user-avatar">
                <div>
                  <h6>Rina Marlina</h6>
                  <div class="stars">⭐⭐⭐⭐⭐</div>
                  <p>"Sistemnya sederhana namun sangat membantu operasional laundry."</p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Kutipan -->
        <div class="mt-5 text-center">
          <blockquote class="blockquote">
            <p class="fs-5 fst-italic">
              "Kebersihan adalah kenyamanan, dan pelayanan terbaik adalah prioritas kami."
            </p>
            <footer class="blockquote-footer mt-2">
              Tim Laundry Management System
            </footer>
          </blockquote>
        </div>

      </div>

    </div>
  </div>
</div>

@endsection