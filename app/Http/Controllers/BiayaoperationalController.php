<?php

namespace App\Http\Controllers;
use App\Models\Biayaoperational;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class BiayaoperationalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Biayaoperational = Biayaoperational::get();
        $response = [
            'message' => 'Show Data',
            'data' => $Biayaoperational
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $Biayaoperational = Biayaoperational::create($request->all());
            $response = [
                'message' => 'Biayaoperational berhasil disimpan!',
                'data' => $Biayaoperational
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data Gagal di Simpan ' . $e->errorinfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Biayaoperational = Biayaoperational::findorFail($id);
        $response = [
            'message' => "Show Data By ID ",
            'data' => $Biayaoperational
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Biayaoperational = Biayaoperational::findorFail($id);
        try {
            $Biayaoperational->update($request->all());
            $response = [
                'message' => 'Biayaoperational Berhasil di Perbarui!',
                'data' => $Biayaoperational
            ];
            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Data Gagal di Perbarui ' . $e->errorinfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delBiayaoperational =Biayaoperational::findorFail($id);
        try {
            $delBiayaoperational->delete();
            $response = [
                'message' => 'Data Berhasil di Hapus!'
            ];
            return response()->json($response , Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'message' => 'Failed to delete data!' . $e->errorInfo
            ]);
        }
    }
}
