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
        Schema::create('pelaksanaan_imunisasi', function (Blueprint $table) {
        $table->integer('pelaksanaan_imunisasi')->primary();
           $table->text('deskripsi', 250)->nullable(true);
           $table->date('tanggal_vaksin')->nullable(false);
           $table->string('foto_dokumentasi')->nullable(false);
           //$table->foreign('id_imunisasi')->on('imunisasi')->references('id_imunisasi');
        //    $table->foreign('nik_anak')->on('anak')->references('nik_anak');
    });

}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaan_imunisasi');
    }
};
