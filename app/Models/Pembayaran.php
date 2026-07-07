<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    protected $fillable = [
        'laundry_id',
        'total_tagihan',
        'jumlah_bayar',
        'kembalian',
        'metode_pembayaran',
        'status_pembayaran',
        'tanggal_bayar',
    ];

    public function laundry()
    {
        return $this->belongsTo(Laundry::class);
    }
}