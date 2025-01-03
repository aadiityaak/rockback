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
        Schema::create('tb_cuti', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('nama')->nullable();
            $table->string('tanggal', 114)->nullable();
            $table->string('jenis', 114)->nullable();
            $table->string('time', 48)->nullable();
            $table->string('tipe', 48)->nullable();
            $table->text('detail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_cuti');
    }
};
