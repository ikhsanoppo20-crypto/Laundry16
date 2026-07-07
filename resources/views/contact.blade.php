@extends('layouts.laundry')

@section('content')
<style>
  body {
    background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
                url('{{ asset('templateperpus/img/22.png') }}') center center / cover no-repeat fixed;
  }

  .contact-card {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 10px;
    padding: 30px;
    margin-top: 80px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  .contact-card h2 {
    font-weight: bold;
    margin-bottom: 20px;
    color: #2c3e50;
    text-align: center;
  }

  .contact-card ul li {
    margin-bottom: 12px;
    font-size: 16px;
  }

  .contact-card ul li i {
    color: #007bff;
    margin-right: 8px;
  }

  .contact-card p {
    font-size: 15px;
    color: #333;
    text-align: left; /* Rata kiri untuk paragraf */
  }

  .icon-cs {
    font-size: 64px;
    color: #007bff;
    margin-bottom: 15px;
    display: block;
    text-align: center;
  }
</style>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="contact-card">

        <!-- ICON Customer Service -->
        <div class="text-center">
          <i class="bi bi-basket-fill icon-cs"></i>
          <h2><b>Hubungi Kami</b></h2>
          <br>
        </div>

        <p class="mt-3">
          Terima kasih telah menggunakan <strong>Wash Laundry</strong>.
          Jika Anda memiliki pertanyaan mengenai layanan laundry, status cucian,
          atau mengalami kendala saat menggunakan sistem, silakan hubungi tim kami melalui informasi di bawah ini.
        </p>

        <ul class="list-unstyled mt-4">
          <li><i class="bi bi-envelope-fill"></i><strong> Email:</strong> wash.laundry@gmail.com</li>
          <li><i class="bi bi-telephone-fill"></i><strong> Telepon / WhatsApp:</strong> +62 812-3456-7890</li>
          <li><i class="bi bi-geo-alt-fill"></i><strong> Alamat:</strong> Jl. Melati No. 25, Jambi</li>
          <li><i class="bi bi-clock-fill"></i><strong> Jam Operasional:</strong> Senin - Sabtu, 08.00 - 20.00 WIB</li>
        </ul>

        <p class="mt-4">
          Saat menghubungi kami, mohon sertakan nama dan nomor pesanan agar kami dapat membantu dengan lebih cepat dan tepat.
        </p>

        <br>

        <p class="mt-4 mb-0">
          Salam hangat, <br>
          <strong>Tim Wash Laundry</strong>
        </p>

      </div>
    </div>
  </div>
</div>
@endsection