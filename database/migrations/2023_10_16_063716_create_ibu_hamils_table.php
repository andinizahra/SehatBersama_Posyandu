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
        Schema::create('ibu_hamil', function (Blueprint $table) {
            $table->id();
            $table->char('nik_ibu_hamil', 16)->unique(); // Pastikan kolom ini unik
            $table->string('nama_ibu_hamil', 100);
            $table->date('tanggal_lahir');
            $table->string('foto_identitas', 50)->nullable();
            $table->string('nomor_telepon_orang_tua', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ibu_hamil');
    }
};
