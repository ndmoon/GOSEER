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
        Schema::table('toko_stok_barangs', function (Blueprint $table) {
            $table->string('nama_toko');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('toko_stok_barangs', function (Blueprint $table) {
            $table->dropColumn('nama_toko');
            //
        });
    }
};
