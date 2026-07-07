<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    // Kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'nama_pelanggan',
        'alamat',
        'no_hp'
    ];
}