<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpajakan extends Model
{
    use HasFactory;
    public $table ='perpajakans';
    public $fillable =['id','divisi','tgl_pembayaran','status','jumlah_pembayaran'];
}
