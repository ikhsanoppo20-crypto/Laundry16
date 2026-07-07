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
    background-color: rgba(255,255,255,0.95);
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.card-header {
    background-color: #90b6e0;
    color: #000;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #679fd6;
    border-color: #5c97cb;
}
</style><div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">            <div class="card-header">
                Edit Data Pembayaran
            </div>

            <div class="card-body">
                <form action="{{ url('pembayaran/'.$pembayaran->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Laundry -->
                    <div class="form-group mb-3">
                        <label>Laundry</label>
                        <select name="laundry_id" class="form-control">
                            @foreach($laundry as $item)
                                <option value="{{ $item->id }}"
                                    {{ $item->id == $pembayaran->laundry_id ? 'selected' : '' }}>
                                    Laundry #{{ $item->id }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Total Tagihan -->
                    <div class="form-group mb-3">
                        <label>Total Tagihan</label>
                        <input type="number"
                               name="total_tagihan"
                               class="form-control"
                               value="{{ $pembayaran->total_tagihan }}">
                    </div>

                    <!-- Jumlah Bayar -->
                    <div class="form-group mb-3">
                        <label>Jumlah Bayar</label>
                        <input type="number"
                               name="jumlah_bayar"
                               class="form-control"
                               value="{{ $pembayaran->jumlah_bayar }}">
                    </div>

                    <!-- Kembalian -->
                    <div class="form-group mb-3">
                        <label>Kembalian</label>
                        <input type="number"
                               name="kembalian"
                               class="form-control"
                               value="{{ $pembayaran->kembalian }}">
                    </div>

                    <!-- Metode Pembayaran -->
                    <div class="form-group mb-3">
                        <label>Metode Pembayaran</label>
                        <select name="metode_pembayaran" class="form-control">
                            <option value="Cash"
                                {{ $pembayaran->metode_pembayaran == 'Cash' ? 'selected' : '' }}>
                                Cash
                            </option>

                            <option value="Transfer"
                                {{ $pembayaran->metode_pembayaran == 'Transfer' ? 'selected' : '' }}>
                                Transfer
                            </option>

                            <option value="QRIS"
                                {{ $pembayaran->metode_pembayaran == 'QRIS' ? 'selected' : '' }}>
                                QRIS
                            </option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div class="form-group mb-3">
                        <label>Status Pembayaran</label>
                        <select name="status_pembayaran" class="form-control">
                            <option value="Lunas"
                                {{ $pembayaran->status_pembayaran == 'Lunas' ? 'selected' : '' }}>
                                Lunas
                            </option>

                            <option value="Belum Lunas"
                                {{ $pembayaran->status_pembayaran == 'Belum Lunas' ? 'selected' : '' }}>
                                Belum Lunas
                            </option>
                        </select>
                    </div>

                    <!-- Tanggal Bayar -->
                    <div class="form-group mb-3">
                        <label>Tanggal Bayar</label>
                        <input type="date"
                               name="tanggal_bayar"
                               class="form-control"
                               value="{{ $pembayaran->tanggal_bayar }}">
                    </div>

            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success">
                    Update
                </button>

                <a href="{{ route('pembayaran.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>
            </div>

                </form>

        </div>
    </div>
</div>

</div>@endsection