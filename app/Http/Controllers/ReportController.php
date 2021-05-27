<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Report::all();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        //
        $report = new Report;
        $report->reportdate = $request->reportdate;
        $report->profitloss = $request->profitloss;
        $report->save();

        return "Data Berhasil Masuk";
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
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */

    public function update($id, Request $request)
    {
        $spd = spd::findOrFail($id);
        $this->validate($request,[
            'nama_transaksi'=> 'required',
            'jenis_pembayaran'=> 'required',
            'tgl_pembayaran'=> 'required',
            'jml_pembayaran'=> 'required',
            'nomer_faktur'=> 'required'
        ]);
        $input = $request->all();

        $spd->fill($input)->save();
        return "Data berhasil di update";
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
        
    }

    public function delete($id){
        $report = Report::find($id);
        $report->delete();

        return "Data berhasil dihapus";
    }
}
