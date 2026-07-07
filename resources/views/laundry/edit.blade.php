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
    color: black;
    font-weight: bold;
}

.btn-warning:hover {
    background-color: #e0a800;
}
</style><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">        <div class="card mt-5">

            <div class="card-header">
                Edit Data Laundry
            </div>

            <div class="card-body">

                <form action="{{ route('laundry.update', $laundry->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Pelanggan</label>
                        <select name="pelanggan_id" class="form-control" required>
                            <option value="">-- Pilih Pelanggan --</option>

                            @foreach($pelanggan as $p)
                                <option value="{{ $p->id }}"
                                    {{ $laundry->pelanggan_id == $p->id ? 'selected' : '' }}>
                                    {{ $p->nama_pelanggan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Berat (Kg)</label>
                        <input type="number"
                               name="berat"
                               class="form-control"
                               value="{{ old('berat', $laundry->berat) }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga per Kg</label>
                        <input type="number"
                               name="harga_per_kg"
                               class="form-control"
                               value="{{ old('harga_per_kg', $laundry->harga_per_kg) }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="Proses"
                                {{ $laundry->status == 'Proses' ? 'selected' : '' }}>
                                Proses
                            </option>

                            <option value="Selesai"
                                {{ $laundry->status == 'Selesai' ? 'selected' : '' }}>
                                Selesai
                            </option>

                            <option value="Diambil"
                                {{ $laundry->status == 'Diambil' ? 'selected' : '' }}>
                                Diambil
                            </option>
                        </select>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-warning">
                            Update
                        </button>

                        <a href="{{ route('laundry.index') }}"
                           class="btn btn-secondary">
                            Kembali
                        </a>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

</div>@endsection