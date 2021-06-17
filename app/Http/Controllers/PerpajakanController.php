<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpajakan;



class PerpajakanController extends Controller
{
    public function index(){
        return Perpajakan::all();
    }
    public function create(request $request){
        $perpajakan = new Perpajakan();
        $perpajakan->divisi = $request->divisi;
        $perpajakan->tgl_pembayaran = $request->tgl_pembayaran;
        $perpajakan->status = $request->status;
        $perpajakan->jumlah_pembayaran = $request->jumlah_pembayaran;
        $perpajakan->save();

        return "Data Berhasil Masuk";
    }
    public function update(request $request, $id){
        $divisi = $request->divisi;
        $tgl_pembayaran = $request->tgl_pembayaran;
        $status= $request->status;
        $jumlah_pembayaran = $request->jumlah_pembayaran;

        $perpajakan= Perpajakan::find($id);
        $perpajakan->divisi= $divisi;
        $perpajakan->tgl_pembayaran= $tgl_pembayaran;
        $perpajakan->status = $status;
        $perpajakan->jumlah_pembayaran= $jumlah_pembayaran;
        $perpajakan->save();

        return "Data Berhasil di Update";
    }
        public function delete($id){
        $perpajakan= Perpajakan::find($id);
        $perpajakan->delete();

        return "Data Berhasil di Hapus";
        }
}
