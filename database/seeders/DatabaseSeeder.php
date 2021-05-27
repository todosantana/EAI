<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('reports')->insert([
            'id' => 123,
            'reportdate' => '2021-05-05',
            'profitloss' => '5000',
            ]);
        \DB::table('spds')->insert([
            'id' => 123,
            'nama_transaksi' => 'Pembelian Barang',
            'jenis_pembayaran' => 'Cash',
            'tgl_pembayaran' => '2021-05-05',
            'jml_pembayaran' => '70000',
            'nomer_faktur' => '06521',
            ]);
        \DB::table('permintaan_pembiayaan')->insert([
            'id' => 123,
            'divisi' => 'Warehouse',
            'kebutuhan' => 'Biaya Operasional',
            'tgl_pembayaran' => '2021-05-05',
            'status' => 'Diterima',
            'jumlah_pembayaran' => '5000000',
            ]);    
    }
}
