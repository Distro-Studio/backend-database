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
        Schema::table('riwayat_penggajians', function (Blueprint $table) {
            $table->foreignId('verifikator_1')->constrained('users')->nullable();
            $table->foreignId('verifikator_2')->constrained('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('riwayat_penggajians', function (Blueprint $table) {
            //
        });
    }
};
