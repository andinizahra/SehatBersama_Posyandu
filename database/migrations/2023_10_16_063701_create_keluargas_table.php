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
        Schema::create('keluarga', function (Blueprint $table) {
            // $table->id();
            $table->integer('no_kk')->primary();
            $table->string('nama_kepala_keluarga', 100)->nullable(false);
            $table->string('fot o_kartu_keluarga')->nullable(false);
            $table->string('foto_kartu_tanda_penduduk')->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->string('rt', 3)->nullable(false);
            $table->string('rw', 3)->nullable(false);
            $table->string('kelurahan')->nullable(false);
            $table->string('kota')->nullable(false);
            $table->string('provinsi')->nullable(false);
            $table->string('kode_pos')->nullable(false);
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keluarga');
    }
};
