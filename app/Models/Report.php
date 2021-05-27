<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_laporan',
        'reportdate',
        'saldo_awal',
        'tunai',
        'piutang_usaha',
        'peralatan',
        'persediaan',
        'toal_aset',
        'hutang_usaha',
        'totaL_liabilities',
        'modal',
        'pendapatan',
        'pengeluaran',
        'total_profitloss',
        'saldo_akhir',
        'penanggungjawab',
    ];
}
