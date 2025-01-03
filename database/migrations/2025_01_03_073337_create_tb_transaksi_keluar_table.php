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
        Schema::create('tb_transaksi_keluar', function (Blueprint $table) {
            $table->unsignedInteger('id_transaksi_keluar')->primary();
            $table->date('tgl')->nullable();
            $table->double('jml')->nullable();
            $table->string('jenis', 50)->nullable();
            $table->mediumText('deskripsi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_transaksi_keluar');
    }
};
