@extends('layouts.laundry')

@section('content')

<style>
  body {
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                url('{{ asset('templateperpus/img/latar1.png') }}') no-repeat center center fixed;
    background-size: cover;
  }

  .card {
    background-color: rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
  }

  .card-header {
    background-color: #90b6e0;
    color: black;
    font-weight: bold;
  }
</style>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card mt-5">

        <div class="card-header">
          Tambah Data Laundry
        </div>

        <div class="card-body">

          <form action="{{ route('laundry.store') }}" method="POST">
            @csrf

            <div class="mb-3">
              <label>Pelanggan</label>
              <select name="pelanggan_id" class="form-control" required>
                <option value="">-- Pilih Pelanggan --</option>
                @foreach($pelanggan as $p)
                  <option value="{{ $p->id }}">
                    {{ $p->nama_pelanggan }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label>Berat (Kg)</label>
              <input type="number" step="0.1"
                     name="berat"
                     class="form-control"
                     required>
            </div>

            <div class="mb-3">
              <label>Harga per Kg</label>
              <input type="number"
                     name="harga_per_kg"
                     class="form-control"
                     required>
            </div>

            <div class="mb-3">
              <label>Status</label>
              <select name="status" class="form-control">
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Diambil">Diambil</option>
              </select>
            </div>

            <div class="mb-3">
              <label>Tanggal Masuk</label>
              <input type="date"
                     name="tanggal_masuk"
                     class="form-control"
                     required>
            </div>

            <div class="mb-3">
              <label>Tanggal Selesai</label>
              <input type="date"
                     name="tanggal_selesai"
                     class="form-control">
            </div>

        </div>

        <div class="card-footer text-end">
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>

          </form>

      </div>

    </div>
  </div>
</div>

@endsection