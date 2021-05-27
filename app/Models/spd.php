<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spd extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_transaksi',
        'jenis_pembayaran',
        'tgl_pembayaran',
        'jml_pembayaran',
        'nomer_faktur',
    ];
}

