<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikToko extends Model
{
    use HasFactory;

    protected $fillable = ['nama_pemilik', 'alamat', 'telepon'];
}
