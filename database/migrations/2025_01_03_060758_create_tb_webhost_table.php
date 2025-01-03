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
        Schema::create('tb_webhost', function (Blueprint $table) {
            $table->integer('id_webhost')->primary();
            $table->string('nama_web', 64)->nullable();
            $table->text('id_paket')->nullable();
            $table->date('tgl_mulai')->nullable();
            $table->integer('id_server2')->default(1);
            $table->integer('id_server')->default(1);
            $table->integer('space')->nullable();
            $table->integer('space_use')->nullable();
            $table->string('hp', 64)->nullable();
            $table->string('telegram', 64)->nullable();
            $table->text('hpads')->nullable();
            $table->string('wa', 64)->nullable();
            $table->string('email', 200)->nullable();
            $table->date('tgl_exp')->nullable();
            $table->date('tgl_update')->nullable();
            $table->enum('server_luar', ['0', '1'])->nullable();
            $table->text('saldo')->nullable();
            $table->text('kategori')->nullable();
            $table->dateTime('waktu')->nullable();
            $table->text('via')->nullable();
            $table->text('konfirmasi_order');
            $table->text('kata_kunci')->nullable();
            $table->text('jenis_kelamin')->nullable();
            $table->integer('usia')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_webhost');
    }
};
