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
        $report->jenis_laporan = $request->jenis_laporan;
        $report->reportdate = $request->reportdate;
        $report->saldo_awal = $request->saldo_awal;
        $report->tunai = $request->tunai;
        $report->piutang_usaha = $request->piutang_usaha;
        $report->peralatan = $request->peralatan;
        $report->persediaan = $request->persediaan;
        $report->total_aset = $request->total_aset;
        $report->hutang_usaha = $request->hutang_usaha;
        $report->total_liabilitas = $request->total_liabilitas;
        $report->modal = $request->modal;
        $report->pendapatan = $request->pendapatan;
        $report->pengeluaran = $request->pengeluaran;
        $report->total_profitloss = $request->total_profitloss;
        $report->saldo_akhir = $request->saldo_akhir;
        $report->penanggungjawab = $request->penanggungjawab;
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
    public function update(request $request, $id)
    {
        //
        $id = $request -> id;
        $jenis_laporan = $request -> jenis_laporan;
        $reportdate = $request -> reportdate;
        $saldo_awal = $request -> saldo_awal;
        $tunai = $request -> tunai;
        $piutang_usaha = $request -> piutang_usaha;
        $peralatan = $request -> peralatan;
        $total_aset = $request -> total_aset;
        $hutang_usaha = $request -> hutang_usaha;
        $total_liabilitas = $request -> total_liabilitas;
        $modal = $request -> modal;
        $pendapatan = $request -> pendapatan;
        $pengeluaran = $request -> pengeluaran;
        $total_profitloss = $request -> total_profitloss;
        $saldo_akhir = $request -> saldo_akhir;
        $penanggungjawab = $request -> penanggungjawab;

        $report = Report::find($id);
        $report->jenis_laporan = $jenis_laporan;
        $report->reportdate = $reportdate;
        $report->saldo_awal = $saldo_awal;
        $report->tunai = $tunai;
        $report->piutang_usaha = $piutang_usaha;
        $report->peralatan = $peralatan;
        $report->total_aset = $total_aset;
        $report->hutang_usaha = $hutang_usaha;
        $report->total_liabilitas = $total_liabilitas;
        $report->modal = $modal;
        $report->pendapatan = $pendapatan;
        $report->pengeluaran = $pengeluaran;
        $report->total_profitloss = $total_profitloss;
        $report->saldo_akhir = $saldo_akhir;
        $report->saldo_akhir = $saldo_akhir;
        $report->penanggungjawab = $penanggungjawab;
        $report->save();

        return "Data Berhasil Masuk";
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
