<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $table = 'personel';
    protected $fillable = [
        'nipegawai',
        'nmlengkap',
        'jkel',
        'tgl_masuk',
        'is_active',
    ];
}
