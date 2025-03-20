<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->uuid('kode_pesanan');
            $table->string('nama');
            $table->date('tanggal_masuk');
            $table->date('tanggal_selesai')->nullable();
            $table->integer('total_harga');
            $table->foreignId('status_pesanan_id')->constrained('status_pesanans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('status_pembayaran_id')->constrained('status_pembayarans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
