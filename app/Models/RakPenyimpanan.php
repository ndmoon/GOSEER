<?php

// app/Models/RakPenyimpanan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakPenyimpanan extends Model
{
    use HasFactory;

    protected $fillable = ['nama_rak','lokasi'];
    
}
