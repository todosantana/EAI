<?php

namespace App\Http\Controllers;

use App\Models\PermintaanPembiayaan;
use Illuminate\Http\Request;

class PermintaanPembiayaanController extends Controller
{
    public function index(){
        return PermintaanPembiayaan::all();
    }
    public function create(request $request){
        $pembiayaan = new PermintaanPembiayaan();
        $pembiayaan->divisi = $request->divisi;
        $pembiayaan->kebutuhan = $request->kebutuhan;
        $pembiayaan->tgl_pembayaran = $request->tgl_pembayaran;
        $pembiayaan->status = $request->status;
        $pembiayaan->jumlah_pembayaran = $request->jumlah_pembayaran;
        $pembiayaan->save();

        return "Data Berhasil Masuk";
    }
    public function update(request $request, $id){
        $divisi = $request->divisi;
        $kebutuhan = $request->kebutuhan;
        $tgl_pembayaran = $request->tgl_pembayaran;
        $status= $request->status;
        $jumlah_pembayaran = $request->jumlah_pembayaran;

        $pembiayaan= PermintaanPembiayaan::find($id);
        $pembiayaan->divisi= $divisi;
        $pembiayaan->kebutuhan= $kebutuhan;
        $pembiayaan->tgl_pembayaran= $tgl_pembayaran;
        $pembiayaan->status = $status;
        $pembiayaan->jumlah_pembayaran= $jumlah_pembayaran;
        $pembiayaan->save();

        return "Data Berhasil di Update";
    }
        public function delete($id){
        $pembiayaan= PermintaanPembiayaan::find($id);
        $pembiayaan->delete();

        return "Data Berhasil di Hapus";
        }
}
