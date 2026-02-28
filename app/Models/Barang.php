<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'baranginout';
    protected $fillable = [
        'barcodeinout',
        'product_id',
        'nomorbatch',
        'supplier_id',
        'statusbrg',
        'stock',
        'brg_masuk',
        'brg_exp',
        'fotobukti',
        'user_id',
    ];
}
