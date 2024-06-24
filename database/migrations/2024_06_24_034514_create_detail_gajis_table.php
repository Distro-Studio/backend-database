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
        Schema::create('detail_gajis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('penggajian_id')->constrained('penggajians');
            $table->string('kategori');
            $table->string('nama_detail');
            $table->string('besaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_gajis');
    }
};
