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
        Schema::create('tb_jurnal', function (Blueprint $table) {
            $table->increments('id'); // Menggunakan increments untuk auto-increment
            $table->text('tanggal');
            $table->mediumText('data');
            $table->text('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jurnal');
    }
};
