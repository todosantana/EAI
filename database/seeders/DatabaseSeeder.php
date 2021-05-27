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
            'jenis_laporan' => 'Laporan Bulanan',
            'reportdate' => '2021-05-31',
            'saldoawal' => 100000,
            'tunai' => 50000,
            'piutangusaha' => 20000,
            'peralatan' => 15000,
            'persediaan' => 15000,
            'totalaset' => 100000,
            'hutangusaha' => 10000,
            'total_liabilitas' => 10000,
            'modal' => 0,
            'pendapatan' => 35000,
            'pengeluaran' => 15000,
            'totalprofitloss' => 20000,
            'saldo_akhir' => 110000,
            'penanggung_jawab' => 'Todoan',
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
