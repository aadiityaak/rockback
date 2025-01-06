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
        Schema::create('tb_konversi_wa5', function (Blueprint $table) {
            $table->increments('id'); // Menggunakan increments untuk auto-increment
            $table->date('date');
            $table->string('value', 144);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_konversi_wa5');
    }
};
