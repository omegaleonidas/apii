<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PegawaiController; 
use App\Http\Controllers\ApiPegawai;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AbsensiController;




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });






Route::group(['middleware' => 'auth:sanctum'], function(){

 
//pegawai
    Route::post('/ApiPegawai',[ApiPegawai::class,'insert']);
    Route::post('/ApiPegawaiEdit/{id_pegawai}',[PegawaiController::class,'ApiPegawaiEdit']);  
    Route::get('/pegawaiShow/{id_pegawai}',[PegawaiController::class,'ApiPegawaiShow']); 
   

    //absensi
    Route::get('/ApiAbsensiShow',[AbsensiController::class,'ApiAbsensiShow']);
    //riwayat
    Route::get('/detailAbsensiShow/{id_pegawai}',[AbsensiController::class,'detailAbsensiShow']);
    Route::post('/ApiAbsensi',[AbsensiController::class,'ApiAbsensi']); 
    Route::put('/ApiAbsensiEdit/{id_absensi}',[AbsensiController::class,'ApiAbsensiEdit']);  
    Route::get('/ApiHitung/{id_pegawai}',[AbsensiController::class,'ApiHitung']);
    Route::get('/time',[AbsensiController::class,'time']);
  


    //cuti
    Route::post('/ApiCutiTambah',[CutiController::class,'ApiCutiTambah']);

    //jabatan
    Route::post('/ApiJabatanAdd',[JabatanController::class,'ApiJabatanAdd']);

    

    //Route::put('/updateById/{id_pegawai}',[ApiPegawai::class,'updateById']);


    Route::post('/updateProfile/{id_pegawai}',[RegisterController::class,'updateProfile']);  
    


    //informasi
    Route::get('/ApiInformasiShow',[InformasiController::class,'ApiInformasiShow']);
   
 //logout
    Route::get('/logout', [AuthController::class, 'logout']);
});




  


//login
Route::post('/login', [AuthController::class, 'login']);




