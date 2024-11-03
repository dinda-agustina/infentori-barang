<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    
    protected $fillable = [
        'nama_barang',
        'jenis_barang',
        'stock',
        'status',
        'harga_satuan'
    ];
}
