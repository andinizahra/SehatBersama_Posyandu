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
        Schema::create('pelaksanaan_vaksin', function (Blueprint $table) {
            $table->id();
            $table->integer('ID_pelaksanaan_vaksin');
            $table->text('deskripsi');
            $table->date('tanggal_vaksin');
            $table->string('foto_dokumentasi', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelaksanaan_vaksin');
    }
};
