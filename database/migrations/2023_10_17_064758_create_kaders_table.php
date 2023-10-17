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
        Schema::create('kader', function (Blueprint $table) {
            $table->id();
            $table->char('username', 16);
            $table->unsignedBigInteger('nomor_anggota_kader')->nullable(false);
            $table->string('nama_kader', 100)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
            $table->string('tempat_lahir', 100)->nullable(false);
            $table->enum('jenis_kelamin', array('laki-laki','perempuan'))->nullable()->change();
            $table->text('alamat_bekerja')->nullable(false);
            $table->string('nomor_telepon', 15);
            $table->string('foto_identitas', 50);
            //$table->foreign('username')->on('akun')->references('username');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kader');
    }
};
