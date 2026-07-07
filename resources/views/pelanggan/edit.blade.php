@extends('layouts.laundry')

@section('content')

<style>
  body {
    background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                url('{{ asset('templateperpus/img/latar1.png') }}') no-repeat center center fixed;
    background-size: cover;
    padding-top: 40px;
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

  .btn-primary:hover {
    background-color: #679fd6;
    border-color: #5c97cb;
  }
</style>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

      <div class="card mt-5">

        <div class="card-header">
          Edit Data Pelanggan
        </div>

        <div class="card-body">

          <form action="{{ url('pelanggan/' . $pelanggan->id) }}" method="POST">
            @method('PUT')
            @csrf

            <!-- Nama Pelanggan -->
            <div class="form-group mb-3">
              <label for="nama_pelanggan" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}" required>
              <span class="text-danger">{{ $errors->first('nama_pelanggan') }}</span>
            </div>

            <!-- Alamat -->
            <div class="form-group mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat" required>{{ old('alamat', $pelanggan->alamat) }}</textarea>
              <span class="text-danger">{{ $errors->first('alamat') }}</span>
            </div>

            <!-- No HP -->
            <div class="form-group mb-3">
              <label for="no_hp" class="form-label">No HP</label>
              <input type="text" class="form-control" id="no_hp" name="no_hp"
                value="{{ old('no_hp', $pelanggan->no_hp) }}" required>
              <span class="text-danger">{{ $errors->first('no_hp') }}</span>
            </div>

        </div>

        <div class="card-footer text-end">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

          </form>

      </div>

    </div>
  </div>
</div>

@endsection