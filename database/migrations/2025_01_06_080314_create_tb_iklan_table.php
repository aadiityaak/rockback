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
        Schema::create('tb_iklan', function (Blueprint $table) {
            $table->increments('id'); // Menggunakan increments untuk auto-increment
            $table->text('nama_web')->nullable();
            $table->text('kontak')->nullable();
            $table->text('paket')->nullable();
            $table->text('tanggal')->nullable();
            $table->text('via')->nullable();
            $table->text('chat_pertama')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_iklan');
    }
};
