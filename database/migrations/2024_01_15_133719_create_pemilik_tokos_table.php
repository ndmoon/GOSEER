<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemilikTokosTable extends Migration
{
    public function up()
    {
        Schema::create('pemilik_tokos', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik');
            $table->string('alamat');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemilik_tokos');
    }
}
