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
        Schema::create('premis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_premi');
            $table->string('sumber_potongan');
            $table->boolean('jenis_premi');
            $table->integer('besaran_premi');
            $table->string('minimal_gaji');
            $table->string('maksimal_gaji');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premis');
    }
};
