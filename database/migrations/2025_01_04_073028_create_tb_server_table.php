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
        Schema::create('tb_server', function (Blueprint $table) {
            $table->unsignedInteger('id_server')->primary();
            $table->string('server', 300)->nullable();
            $table->string('alamat_server', 200);
            $table->string('user', 150)->nullable();
            $table->string('password', 150)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_server');
    }
};
