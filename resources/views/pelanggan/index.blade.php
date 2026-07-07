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
        background-color: rgba(255, 255, 255, 0.95);
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
                    {{ $judul }}
                </div>

                <div class="card-body">

                    <table class="table table-bordered table-striped table-hover text-center">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($pelanggan as $a)
                            <tr>
                                <td>{{ $a->nama_pelanggan }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>{{ $a->no_hp }}</td>
                                <td>
                                    <div class="d-flex justify-content-center gap-2">

                                        <a href="{{ url('pelanggan/'.$a->id.'/edit') }}"
                                           class="btn btn-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ url('pelanggan/'.$a->id) }}"
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
                                <td colspan="4">
                                    Tidak ada data pelanggan
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="text-center mt-3">
                        <a href="{{ url('pelanggan/create') }}"
                           class="btn btn-success">
                            Tambah Pelanggan
                        </a>

                        <a href="{{ route('pelanggan.laporan') }}"
                           class="btn btn-primary"
                           target="_blank">
                            Cetak Laporan
                        </a>
                    </div>

                </div>

                <div class="card-footer text-center">
                    {{ $pelanggan->links() }}
                </div>

            </div>

        </div>
    </div>
</div>

@endsection