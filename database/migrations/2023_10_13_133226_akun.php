<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('akun', function (Blueprint $table) {
            $table->id();
            $table->char('username', 16);
            $table->string('password', 16)->nullable(false); // NOT NULL
            $table->string('role')->default('admin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('akun');
    }
};
