<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laundry', function (Blueprint $table) {
            $table->id();

            // RELASI KE PELANGGAN
            $table->foreignId('pelanggan_id')
                  ->constrained('pelanggan')
                  ->onDelete('cascade');

            // DATA LAUNDRY
            $table->float('berat'); // dalam kg
            $table->integer('harga_per_kg');
            $table->integer('total_harga');

            // STATUS TRANSAKSI
            $table->string('status'); // proses / selesai / diambil

            // OPTIONAL (kalau mau lebih lengkap)
            $table->date('tanggal_masuk')->nullable();
            $table->date('tanggal_selesai')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laundry');
    }
};