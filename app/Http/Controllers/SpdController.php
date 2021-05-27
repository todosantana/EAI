<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpdController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return spd::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $spd = new spd;
        $spd->id = $request->id;
        $spd->nama_transaksi = $request->nama_transaksi;
        $spd->jenis_pembayaran = $request->jenis_pembayaran;
        $spd->tgl_pembayaran = $request->tgl_pembayaran;
        $spd->jml_pembayaran = $request->jml_pembayaran;
        $spd->nomer_faktur = $request->nomer_faktur;
        $spd->save();

        return "Data berhasil masuk";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\spd  $spd
     * @return \Illuminate\Http\Response
     */
    public function show(spd $spd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\spd  $spd
     * @return \Illuminate\Http\Response
     */
    public function edit(spd $spd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\spd  $spd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spd $spd)
    {
        $id = $request->$id;
        $nama_transaksi = $request->nama_transaksi;
        $jenis_pembayaran = $request->jenis_pembayaran;
        $tgl_pembayaran = $request->tgl_pembayaran;
        $jml_pembayaran = $request->jml_pembayaran;
        $nomer_faktur = $request->nomer_faktur;

        $spd = spd::find($id);
        $spd->nama_transaksi = $nama_transaksi;
        $spd->jenis_pembayaran = $jenis_pembayaran;
        $spd->tgl_pembayaran = $tgl_pembayaran;
        $spd->jml_pembayaran = $jml_pembayaran;
        $spd->nomer_faktur = $nomer_faktur;
        $spd->save();

        return "Data berhasil di update";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\spd  $spd
     * @return \Illuminate\Http\Response
     */
    public function destroy(spd $spd)
    {
        //
    }

    public function delete($id)
    {
        $spd = spd::find($id);
        $spd->delete();

        return "Data berhasil di hapus";
    }
}
