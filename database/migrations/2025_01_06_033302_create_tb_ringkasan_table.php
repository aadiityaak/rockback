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
        Schema::create('tb_ringkasan', function (Blueprint $table) {
            $table->increments('id_ringkasan'); // Menggunakan increments untuk auto-increment
            $table->string('bulan', 20)->nullable();
            $table->integer('laba_akuntansi')->nullable();
            $table->integer('zakat')->nullable();
            $table->integer('shodaqoh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ringkasan');
    }
};
