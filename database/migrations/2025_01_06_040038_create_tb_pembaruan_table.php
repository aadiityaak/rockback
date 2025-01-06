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
        Schema::create('tb_pembaruan', function (Blueprint $table) {
            $table->increments('id'); // Menggunakan increments untuk auto-increment
            $table->integer('id_webhost');
            $table->text('tanggal');
            $table->text('tanggal_masuk');
            $table->text('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pembaruan');
    }
};
