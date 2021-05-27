<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_transaksi');
            $table->string('jenis_pembayaran');
            $table->string('tgl_pembayaran');
            $table->string('jml_pembayaran');
            $table->string('nomer_faktur');
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
        Schema::dropIfExists('spds');
    }
}
