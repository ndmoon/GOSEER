<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakPenyimpanansTable extends Migration
{
    public function up()
    {
        Schema::create('rak_penyimpanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_rak');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rak_penyimpanans');
    }
}
