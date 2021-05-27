<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanPembiayaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan_pembiayaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('divisi');
            $table->string('kebutuhan');
            $table->string('tgl_pembayaran');
            $table->string('status');
            $table->string('jumlah_pembayaran');
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
        Schema::dropIfExists('permintaan_pembiayaan');
    }
}
