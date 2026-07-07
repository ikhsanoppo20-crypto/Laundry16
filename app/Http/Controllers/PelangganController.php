<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pelanggan;


class PelangganController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $pelanggan = pelanggan::paginate(10);
        $judul = "Data Pelanggan";
        return view('pelanggan.index', compact('pelanggan','judul'));
    }

    // Form tambah data
    public function create()
    {
        return view('pelanggan.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('pelanggan.index')
                         ->with('success', 'Data pelanggan berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $pelanggan = pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        $pelanggan = pelanggan::findOrFail($id);

        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('pelanggan.index')
                         ->with('success', 'Data pelanggan berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $pelanggan = pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
                         ->with('success', 'Data pelanggan berhasil dihapus');
    }

    public function laporan()
{
    $pelanggan = Pelanggan::all();

    return view('pelanggan.laporan', [
        'judul' => 'Laporan Pelanggan',
        'pelanggan' => $pelanggan
    ]);
}
public function laporanPelanggan()
{
    $pelanggan = Pelanggan::all();

    return view('pelanggan.laporan', compact('pelanggan'));
}
}