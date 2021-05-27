<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_laporan');
            $table->date('reportdate');
            $table->integer('saldo_awal');
            $table->integer('tunai');
            $table->integer('piutang_usaha');
            $table->integer('peralatan');
            $table->integer('persediaan');
            $table->integer('total_aset');
            $table->integer('hutang_usaha');
            $table->integer('total_liabilitas');
            $table->integer('modal');
            $table->integer('pendapatan');
            $table->integer('pengeluaran');
            $table->integer('total_profitloss');
            $table->integer('saldo_akhir');
            $table->string('penanggungjawab');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
