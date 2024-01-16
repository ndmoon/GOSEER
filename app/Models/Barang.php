<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_barang', 'supplier_id', 'harga', 'stok', 'rak_penyimpanan_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function rakPenyimpanan()
    {
        return $this->belongsTo(RakPenyimpanan::class);
    }
}
