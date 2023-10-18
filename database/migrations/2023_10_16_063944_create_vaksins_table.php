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
            $table->enum('jenis_vaksin', ['vaksin_1', 'vaksin_2', 'vaksin_3']);
            $table->date('jadwal_vaksin')->nullable(false);
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vaksin');
    }
};
