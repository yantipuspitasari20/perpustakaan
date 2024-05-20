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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 200);
            $table->string('edisi', 50);
            $table->integer('no_rak');
            $table->date('tahun');
            $table->string('penerbit', 100);
            $table->integer('kd_penulis');

            $table->timestamps();
            // $table->foreign('no_rak')->references('no_rak')->on('rak')->onDelete('cascade');
            // $table->foreign('kd_penulis')->references('kd_penukis')->on('penulis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
