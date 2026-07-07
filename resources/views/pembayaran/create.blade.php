@extends('layouts.laundry')

@section('content')

<style>
    body{
        background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)),
        url('{{ asset('templateperpus/img/latar1.png') }}') no-repeat center center fixed;
        background-size: cover;
    }

    .card{
        background: rgba(255,255,255,.95);
        border-radius:12px;
        box-shadow:0 8px 20px rgba(0,0,0,.15);
    }

    .card-header{
        background:#90b6e0;
        color:black;
        font-weight:bold;
    }
</style>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card mt-5">

                <div class="card-header">
                    Tambah Data Pembayaran
                </div>

                <div class="card-body">

                    <form action="{{ route('pembayaran.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Laundry</label>
                            <select name="laundry_id" class="form-control" required>
                                <option value="">-- Pilih Laundry --</option>

                                @foreach($laundries as $laundry)
                                    <option value="{{ $laundry->id }}">
                                        Laundry #{{ $laundry->id }}
                                        -
                                        {{ $laundry->pelanggan->nama_pelanggan }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Jumlah Bayar</label>
                            <input type="number"
                                   name="jumlah_bayar"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Metode Pembayaran</label>
                            <select name="metode_pembayaran" class="form-control">
                                <option value="Cash">Cash</option>
                                <option value="Transfer">Transfer</option>
                                <option value="QRIS">QRIS</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal Bayar</label>
                            <input type="date"
                                   name="tanggal_bayar"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Status Pembayaran</label>
                            <select name="status" class="form-control">
                                <option value="Lunas">Lunas</option>
                                <option value="Belum Lunas">Belum Lunas</option>
                            </select>
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
``