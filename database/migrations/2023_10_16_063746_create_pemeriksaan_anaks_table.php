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
        Schema::create('pemeriksaan_anak', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_pemeriksaan');
            $table->date('tanggal_pemeriksaan');
            $table->enum('golongan_darah', array('A-+','B-+','AB-+','O-+'))->nullable()->default(null);
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->float('lingkar_kepala');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_anak');
    }
};
