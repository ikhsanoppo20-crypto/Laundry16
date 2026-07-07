<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();

            $table->foreignId('laundry_id')
                  ->constrained('laundry')
                  ->onDelete('cascade');

            $table->integer('total_tagihan');
            $table->integer('jumlah_bayar');
            $table->integer('kembalian')->default(0);

            $table->enum('metode_pembayaran', [
                'Cash',
                'Transfer',
                'QRIS'
            ]);

            $table->enum('status_pembayaran', [
                'Lunas',
                'Belum Lunas'
            ])->default('Belum Lunas');

            $table->date('tanggal_bayar');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};