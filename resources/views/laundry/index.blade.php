@extends('layouts.laundry')

@section('content')

<style>
    body {
        background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)),
                    url('{{ asset('templateperpus/img/latar1.png') }}')
                    no-repeat center center fixed;
        background-size: cover;
    }

    .main {
        padding: 20px;
    }

    .card {
        background-color: rgba(255,255,255,0.95);
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        margin: auto;
    }

    .card-header {
        background-color: #90b6e0;
        color: black;
        font-weight: bold;
        text-align: center;
    }

    .btn-primary:hover {
        background-color: #679fd6;
        border-color: #5c97cb;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>

<div class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card mt-3">

                <div class="card-header">
                    Data Laundry
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Pelanggan</th>
                                <th>Berat</th>
                                <th>Harga/Kg</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($laundry as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->pelanggan->nama_pelanggan }}</td>
                                <td>{{ $item->berat }} Kg</td>
                                <td>Rp {{ number_format($item->harga_per_kg,0,',','.') }}</td>
                                <td>Rp {{ number_format($item->total_harga,0,',','.') }}</td>
                                <td>{{ $item->status }}</td>

                                <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        <a href="{{ route('laundry.edit',$item->id) }}"
                                           class="btn btn-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('laundry.destroy',$item->id) }}"
                                              method="POST"
                                              onsubmit="return confirm('Apakah data akan dihapus?')">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    class="btn btn-danger btn-sm">
                                                Hapus
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    Tidak ada data laundry
                                </td>
                            </tr>
                            @endforelse
                        </tbody>

                    </table>

                    <div class="text-center mt-3">
                        <a href="{{ route('laundry.create') }}"
                           class="btn btn-success">
                            Tambah Laundry
                        </a>

                        <a href="{{ route('laundry.laporan') }}"
                           class="btn btn-primary"
                           target="_blank">
                            Cetak Laporan
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection