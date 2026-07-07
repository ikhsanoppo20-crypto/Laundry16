@extends('layouts.laundry')

@section('content')

<style>
body{
    background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),
    url('{{ asset('templateperpus/img/latar1.png') }}')
    no-repeat center center fixed;
    background-size: cover;
}

.main{
    padding:20px;
}

.card{
    background:rgba(255,255,255,.95);
    border-radius:12px;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
}

.card-header{
    background:#90b6e0;
    font-weight:bold;
    text-align:center;
}

/* BAGIAN PENTING */
.table-responsive{
    overflow-x:auto;
}

table{
    width:100%;
    table-layout:auto !important;
}

.table th,
.table td{
    white-space:nowrap !important;
    text-align:center;
    vertical-align:middle;
}

.table th{
    background:#cfe8ff;
}
</style>

<div class="container-fluid px-4">
    <div class="row justify-content-center">
        <div class="col-xl-12">

            <div class="card mt-3">

                <div class="card-header">
                    Data Pembayaran
                </div>

                <div class="card-body">

                    <div class="table-responsive">

                        <table class="table table-bordered table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Laundry</th>
                                    <th>Total Tagihan</th>
                                    <th>Jumlah Bayar</th>
                                    <th>Kembalian</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Status</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                            @forelse($pembayaran as $key => $row)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $row->laundry_id }}</td>
                                    <td>Rp {{ number_format($row->total_tagihan,0,',','.') }}</td>
                                    <td>Rp {{ number_format($row->jumlah_bayar,0,',','.') }}</td>
                                    <td>Rp {{ number_format($row->kembalian,0,',','.') }}</td>
                                    <td>{{ $row->metode_pembayaran }}</td>

                                    <td>
                                        @if($row->status_pembayaran=='Lunas')
                                            <span class="badge bg-success">
                                                Lunas
                                            </span>
                                        @else
                                            <span class="badge bg-warning text-dark">
                                                Belum Lunas
                                            </span>
                                        @endif
                                    </td>

                                    <td>{{ $row->tanggal_bayar }}</td>

                                    <td>
                                        <a href="{{ url('pembayaran/'.$row->id.'/edit') }}"
                                           class="btn btn-primary btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ url('pembayaran/'.$row->id) }}"
                                              method="POST"
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @empty

                                <tr>
                                    <td colspan="9">
                                        Belum ada data pembayaran
                                    </td>
                                </tr>

                            @endforelse
                            </tbody>

                        </table>

                    </div>
                        <div class="text-center mt-3">

                        <a href="{{ route('pembayaran.create') }}"
                        class="btn btn-success">
                            Tambah Pembayaran
                        </a>

                        <a href="{{ route('pembayaran.laporan') }}"
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
</div>

@endsection