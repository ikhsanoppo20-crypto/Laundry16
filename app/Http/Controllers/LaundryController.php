<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    // INDEX
    public function index()
    {
        $judul = "Data Laundry";
        $laundry = Laundry::with('pelanggan')->paginate(10);

        return view('laundry.index', compact('laundry', 'judul'));
    }

    // CREATE
    public function create()
    {
        $judul = "Tambah Laundry";
        $pelanggan = Pelanggan::all();

        return view('laundry.create', compact('judul', 'pelanggan'));
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'berat' => 'required|numeric',
            'harga_per_kg' => 'required|numeric',
            'status' => 'required',
        ]);

        Laundry::create([
            'pelanggan_id' => $request->pelanggan_id,
            'berat' => $request->berat,
            'harga_per_kg' => $request->harga_per_kg,
            'total_harga' => $request->berat * $request->harga_per_kg,
            'status' => $request->status,
            'tanggal_masuk' => now(),
        ]);

        return redirect()->route('laundry.index');
    }

    // EDIT
    public function edit($id)
    {
        $judul = "Edit Laundry";
        $laundry = Laundry::findOrFail($id);
        $pelanggan = Pelanggan::all();

        return view('laundry.edit', compact('judul', 'laundry', 'pelanggan'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'berat' => 'required|numeric',
            'harga_per_kg' => 'required|numeric',
            'status' => 'required',
        ]);

        $laundry = Laundry::findOrFail($id);

        $laundry->update([
            'pelanggan_id' => $request->pelanggan_id,
            'berat' => $request->berat,
            'harga_per_kg' => $request->harga_per_kg,
            'total_harga' => $request->berat * $request->harga_per_kg,
            'status' => $request->status,
        ]);

        return redirect()->route('laundry.index');
    }

    // DELETE
    public function destroy($id)
    {
        $laundry = Laundry::findOrFail($id);
        $laundry->delete();

        return redirect()->route('laundry.index');
    }

    public function laporan()
{
    $laundry = Laundry::with('pelanggan')->get();

    return view('laundry.laporan', compact('laundry'));
}
}