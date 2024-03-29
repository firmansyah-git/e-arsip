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
        Schema::create('surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat', 50)->unique();
            $table->string('nama_instansi', 200);
            $table->date('tanggal');
            $table->text('perihal');
            $table->text('informasi_singkat');
            $table->enum('kategori', ['surat_masuk', 'surat_keluar', 'surat_pribadi']);
            $table->string('file_surat', 100);
            $table->boolean('akses_surat_pribadi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat');
    }
};
