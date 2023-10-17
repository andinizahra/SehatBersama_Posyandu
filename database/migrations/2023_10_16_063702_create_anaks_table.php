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
            $table->id();
            $table->integer('no_kk')->nullable(false);
            $table->string('nik_anak')->nullable(false);
            $table->string('nama_anak', 100)->nullable(false);
            $table->string('nama_orang_tua', 100)->nullable(false);
            $table->enum('jenis_kelamin', array('laki-laki','perempuan'))->nullable()->change();
            $table->string('foto_identitas', 50)->nullable(); // Jika foto identitas opsional, gunakan nullable
            $table->string('nomor_telepon_orang_tua', 15); // Tidak perlu nullable jika nomor telepon wajib
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir', 100)->nullable(false);
            $table->timestamps();
        });;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak');
    }
};
