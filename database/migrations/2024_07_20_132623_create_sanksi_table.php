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
        Schema::create('sanksi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_anggota')->references('id')->on('anggota')->onDelete("cascade")->onUpdate("cascade");

            $table->foreignId('id_peminjaman')->references('id')->on('peminjaman')->onDelete("cascade")->onUpdate("cascade");;
            $table->integer('jumlah_denda');
            $table->enum('status', ['tunggakan', 'lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanksi');
    }
};
