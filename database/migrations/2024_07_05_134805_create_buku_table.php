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
            $table->foreignId('no_rak')->references("id")->on("rak")->onDelete("cascade")->onUpdate("cascade");
            $table->date('tahun');
            $table->string('penerbit', 100);
            $table->foreignId('kd_penulis')->references("id")->on("penulis")->onDelete("cascade")->onUpdate("cascade");
            $table->timestamps();
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
