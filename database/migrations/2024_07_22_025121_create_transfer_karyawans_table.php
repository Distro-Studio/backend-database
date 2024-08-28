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
        Schema::create('transfer_karyawans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('tgl_mulai');
            $table->foreignId('unit_kerja_asal')->constrained('unit_kerjas');
            $table->foreignId('unit_kerja_tujuan')->nullable()->constrained('unit_kerjas');
            $table->foreignId('jabatan_asal')->constrained('jabatans');
            $table->foreignId('jabatan_tujuan')->nullable()->constrained('jabatans');
            $table->foreignId('kategori_transfer_id')->constrained('kategori_transfer_karyawans');
            $table->text('alasan');
            $table->string('dokumen');
            $table->boolean('is_processed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer_karyawans');
    }
};
