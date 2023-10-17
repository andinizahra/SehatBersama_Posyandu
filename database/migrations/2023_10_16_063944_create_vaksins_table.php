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
        Schema::create('vaksin', function (Blueprint $table) {
            $table->integer('id_vaksin')->primary();
            $table->enum('jenis_vaksin')->nullable(false);
            $table->datetimes('jadwal_vaksin')->nullable(false);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaksins');
    }
};
