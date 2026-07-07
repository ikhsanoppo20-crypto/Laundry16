<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'penggunas';

    protected $fillable = ['nama_pengunjung', 'alamat', 'status'];

    public $timestamps = true;
}
