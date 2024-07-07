<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('presensis', function (Blueprint $table) {
            // Drop the old column constraints
            $table->dropColumn('foto_keluar');
        });

        Schema::table('presensis', function (Blueprint $table) {
            // Add the new foreign key column
            $table->foreignId('foto_keluar')->nullable()->constrained('berkas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('presensis', function (Blueprint $table) {
            // Drop the new foreign key column
            $table->dropForeign(['foto_keluar']);
            $table->dropColumn('foto_keluar');

            // Add the old column back
            $table->string('foto_keluar');
        });
    }
};
