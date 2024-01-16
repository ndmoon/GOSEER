<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoStokBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('toko_stok_barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemilik_toko_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('jumlah');
            $table->timestamps();

            // Foreign Keys
            $table->foreign('pemilik_toko_id')->references('id')->on('pemilik_tokos')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('toko_stok_barangs');
    }
}
