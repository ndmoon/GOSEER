<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->unsignedBigInteger('supplier_id');
            $table->decimal('harga', 10, 2);
            $table->integer('stok');
            $table->unsignedBigInteger('rak_penyimpanan_id'); // tambahkan kolom untuk kunci asing
            $table->foreign('rak_penyimpanan_id')->references('id')->on('rak_penyimpanans')->onDelete('cascade');
            $table->timestamps();

            // Foreign Key
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
