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
        Schema::create('tb_transaksi_masuk', function (Blueprint $table) {
            $table->integer('id_transaksi_masuk')->primary();
            $table->integer('id')->nullable();
            $table->date('tgl')->nullable();
            $table->unsignedInteger('total_biaya')->nullable();
            $table->unsignedInteger('bayar')->nullable();
            $table->enum('pelunasan', ['Y', 'N'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi_masuk');
    }
};
