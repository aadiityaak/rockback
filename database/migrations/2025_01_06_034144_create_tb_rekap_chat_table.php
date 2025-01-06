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
        Schema::create('tb_rekap_chat', function (Blueprint $table) {
            $table->increments('id'); // Menggunakan increments untuk auto-increment
            $table->string('whatsapp', 114)->nullable();
            $table->dateTime('chat_pertama')->nullable();
            $table->string('via', 114)->nullable();
            $table->string('alasan', 250)->nullable();
            $table->text('detail')->nullable();
            $table->text('kata_kunci')->nullable();
            $table->string('tanggal_followup')->nullable();
            $table->string('status_followup', 114)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_rekap_chat');
    }
};
