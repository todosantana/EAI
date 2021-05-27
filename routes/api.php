<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//REPORTS
Route::get('reports', 'App\Http\Controllers\ReportController@index');
Route::post('reports', 'App\Http\Controllers\ReportController@create');
Route::put('/reports/{id}', 'App\Http\Controllers\ReportController@update');
Route::delete('/reports/{id}', 'App\Http\Controllers\ReportController@delete');

//SIKLUS PENDAPATAN
Route::get('spd', 'App\Http\Controllers\SpdController@index');
Route::post('spd', 'App\Http\Controllers\SpdController@create');
Route::put('/spd/{id}', 'App\Http\Controllers\SpdController@update');
Route::delete('/spd/{id}', 'App\Http\Controllers\SpdController@delete');

//PERMINTAAN PEMBIAYAAN
Route::get('permintaanpembiayaan' , 'App\Http\Controllers\PermintaanPembiayaanController@index');
Route::post('permintaanpembiayaan' , 'App\Http\Controllers\PermintaanPembiayaanController@create');
Route::put('/permintaanpembiayaan/{id}' , 'App\Http\Controllers\PermintaanPembiayaanController@update');
Route::delete('/permintaanpembiayaan/{id}' , 'App\Http\Controllers\PermintaanPembiayaanController@delete');