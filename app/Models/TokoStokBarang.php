<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokoStokBarang extends Model
{
    use HasFactory;

    protected $fillable = ['toko_id', 'barang_id', 'jumlah'];

    public function toko()
    {
        return $this->belongsTo(PemilikToko::class, 'pemilik_toko_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'barang_id');
    }

}
