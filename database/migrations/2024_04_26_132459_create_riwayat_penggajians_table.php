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
        Schema::create('riwayat_penggajians', function (Blueprint $table) {
            $table->id();
            $table->date('periode');
            $table->integer('karyawan_verifikasi');
            // $table->foreignId('verifikator_1')->nullable()->constrained('users');
            // $table->foreignId('verifikator_2')->nullable()->constrained('users');
            $table->integer('status_riwayat_gaji')->default(1); // 1 = created, 2 = dipublikasi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_penggajians');
    }
};
