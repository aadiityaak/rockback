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
        Schema::create('tb_karyawan', function (Blueprint $table) {
            $table->increments('id_karyawan'); // Menggunakan increments untuk auto-increment
            $table->string('nama', 128)->nullable();
            $table->string('hp', 24)->nullable();
            $table->string('wa', 24)->nullable();
            $table->string('bb', 24)->nullable();
            $table->string('email', 64)->nullable();
            $table->string('alamat', 128)->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->string('username', 60)->nullable();
            $table->string('password', 100)->nullable();
            $table->enum('jenis', ['finance', 'webmaster', 'project_manager', 'billing', 'client_support', 'superadmin', 'pemilik', 'keuangan'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_karyawan');
    }
};
