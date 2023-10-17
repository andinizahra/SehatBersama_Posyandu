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
        Schema::create('pemeriksaan_ibu_hamil', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_pemeriksaan');
            $table->date('tanggal_pemeriksaan');
            $table->unsignedInteger('umur_kehamilan');
            $table->float('tekanan_darah');
            $table->float('tinggi_fundus');
            $table->integer('tinggi_badan');
            $table->integer('letak_janin');
            $table->float('denyut_jantung_janin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_ibu_hamil');
    }
};
