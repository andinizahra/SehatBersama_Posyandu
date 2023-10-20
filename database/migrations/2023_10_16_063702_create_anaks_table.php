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
        Schema::create('anak', function (Blueprint $table) {
        $table->char('nik_anak')->primary();
        $table->integer('no_kk')->nullable(false);
        $table->string('nama_anak', 100)->nullable(false);
        $table->date('tanggal_lahir'); 
        $table->string('nama_orang_tua', 100)->nullable(false);
        $table->enum('jenis_kelamin', array('laki-laki','perempuan'))->nullable();
        $table->string('foto_identitas', 50)->nullable(); 
        $table->string('nomor_telepon_orang_tua', 15); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
