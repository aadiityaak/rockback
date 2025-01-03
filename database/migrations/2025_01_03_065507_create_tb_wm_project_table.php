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
        Schema::create('tb_wm_project', function (Blueprint $table) {
            $table->integer('id_wm_project')->primary();
            $table->integer('id_karyawan')->nullable();
            $table->integer('id')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('stop')->nullable();
            $table->float('durasi')->nullable();
            $table->text('webmaster')->nullable();
            $table->text('date_mulai')->nullable();
            $table->text('date_selesai')->nullable();
            $table->text('qc')->nullable();
            $table->string('catatan', 128)->nullable();
            $table->enum('status_multi', ['pending', 'selesai'])->default('pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_wm_project');
    }
};
