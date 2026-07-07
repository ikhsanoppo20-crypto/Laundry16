<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundry';

    protected $fillable = [
        'pelanggan_id',
        'berat',
        'harga_per_kg',
        'total_harga',
        'status',
        'tanggal_masuk',
        'tanggal_selesai',
    ];

    // RELASI KE PELANGGAN
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}