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
        Schema::create('tb_pm_project', function (Blueprint $table) {
            $table->increments('id_pm_project'); // Menggunakan increments untuk auto-increment
            $table->integer('id')->nullable();
            $table->text('konfirm_revisi_1')->nullable();
            $table->text('fr1')->nullable();
            $table->date('tutorial_password')->nullable();
            $table->date('selesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pm_project');
    }
};
