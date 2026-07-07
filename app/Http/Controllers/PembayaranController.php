<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Laundry;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('laundry')->paginate(10);

        return view('pembayaran.index', [
            'judul' => 'Data Pembayaran',
            'pembayaran' => $pembayaran
        ]);
    }

    public function create()
    {
         $laundries = Laundry::all();

        return view('pembayaran.create', compact('laundries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'laundry_id' => 'required',
            'jumlah_bayar' => 'required|numeric',
            'metode_pembayaran' => 'required',
            'tanggal_bayar' => 'required',
        ]);

        $laundry = Laundry::findOrFail($request->laundry_id);

        $total_tagihan = $laundry->total_harga;
        $kembalian = $request->jumlah_bayar - $total_tagihan;

        Pembayaran::create([
            'laundry_id' => $request->laundry_id,
            'total_tagihan' => $total_tagihan,
            'jumlah_bayar' => $request->jumlah_bayar,
            'kembalian' => $kembalian,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->jumlah_bayar >= $total_tagihan ? 'Lunas' : 'Belum Lunas',
            'tanggal_bayar' => $request->tanggal_bayar,
        ]);

        return redirect()->route('pembayaran.index')
            ->with('success', 'Pembayaran berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $laundry = Laundry::all();

        return view('pembayaran.edit', compact('pembayaran', 'laundry'));
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::findOrFail($id);

        $total_tagihan = $request->total_tagihan;
        $kembalian = $request->jumlah_bayar - $total_tagihan;

        $pembayaran->update([
            'laundry_id' => $request->laundry_id,
            'total_tagihan' => $total_tagihan,
            'jumlah_bayar' => $request->jumlah_bayar,
            'kembalian' => $kembalian,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'tanggal_bayar' => $request->tanggal_bayar,
        ]);

        return redirect()->route('pembayaran.index');
    }

    public function destroy($id)
    {
        Pembayaran::findOrFail($id)->delete();

        return redirect()->route('pembayaran.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function laporan()
    {
        $pembayaran = Pembayaran::all();

        return view('pembayaran.laporan', compact('pembayaran'));
    }
}