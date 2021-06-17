<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biayaoperational extends Model
{
    use HasFactory;
   public $fillable =['nama','kebutuhan','jumlah', 'tanggaldibutuhkan','penanggungjawab'];
}
