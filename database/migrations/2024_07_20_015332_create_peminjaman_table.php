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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->foreignId("no_buku")->references("id")->on("buku")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("id_anggota")->references("id")->on("anggota")->onDelete("cascade")->onUpdate("cascade");
            $table->date("tgl_peminjaman");
            $table->date("tgl_pengembalian");
            $table->enum("status", ["kembali", "belum"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
