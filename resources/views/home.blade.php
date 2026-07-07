@extends('layouts.laundry')

@section('content')

<!-- Fonts & AOS -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

<!-- Typed.js -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<style>
  body, h2, p {
    font-family: 'Poppins', sans-serif;
  }

  .hero {
    height: 100vh;
    background-image: url('{{ asset('templateperpus') }}/img/home laundry.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
  }

  .hero::before {
    content: "";
    background: rgba(0, 0, 0, 0.45);
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    z-index: 1;
  }

  .hero .container {
    z-index: 2;
    position: relative;
  }

  .hero h2 {
    font-size: 4rem; /* ✅ Ukuran diperbesar dari 2.8rem */
    font-weight: 700;
    color: white;
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.7);
    margin-bottom: 20px;
  }

  .hero p {
    font-size: 1.3rem;
    color: #ffffff;
    text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.6);
  }

  .typed {
    color: #ffe082;
    font-weight: 600;
  }
</style>

<section id="hero" class="hero section d-flex align-items-center justify-content-center text-center text-white">
  <div class="container text-center text-white" data-aos="fade-up" data-aos-delay="100">
    <h2>Selamat Datang di <br>Wash Laundry</h2>
    <p>
      Kami <span class="typed" data-typed-items="Melayani dengan sepenuh hati untuk memberikan hasil cucian yang bersih"> Wash Laundry</span>
    </p>
  </div>

</section>
@endsection 