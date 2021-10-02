<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\pegawaiController; 
use App\Http\Controllers\ApiPegawai;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\cutiController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\informasiController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\absensiController;




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });






Route::group(['middleware' => 'auth:sanctum'], function(){

 
//pegawai
    Route::post('/ApiPegawai',[ApiPegawai::class,'insert']);
    Route::post('/ApiPegawaiEdit/{id_pegawai}',[pegawaiController::class,'ApiPegawaiEdit']);  
    Route::get('/pegawaiShow/{id_pegawai}',[pegawaiController::class,'ApiPegawaiShow']); 
   

    //absensi
    Route::get('/ApiAbsensiShow',[absensiController::class,'ApiAbsensiShow']);
    //riwayat
    Route::get('/detailAbsensiShow/{id_pegawai}',[absensiController::class,'detailAbsensiShow']);
    Route::post('/ApiAbsensi',[absensiController::class,'ApiAbsensi']); 
    Route::put('/ApiAbsensiEdit/{id_absensi}',[absensiController::class,'ApiAbsensiEdit']);  
    Route::get('/ApiHitung/{id_pegawai}',[absensicontroller::class,'ApiHitung']);
    Route::get('/time',[absensicontroller::class,'time']);
  


    //cuti
    Route::post('/ApiCutiTambah',[cutiController::class,'ApiCutiTambah']);

    //jabatan
    Route::post('/ApiJabatanAdd',[jabatanController::class,'ApiJabatanAdd']);

    

    //Route::put('/updateById/{id_pegawai}',[ApiPegawai::class,'updateById']);


    Route::post('/updateProfile/{id_pegawai}',[RegisterController::class,'updateProfile']);  
    


    //informasi
    Route::get('/ApiInformasiShow',[informasiController::class,'ApiInformasiShow']);
   
 //logout
    Route::get('/logout', [AuthController::class, 'logout']);
});




  


//login
Route::post('/login', [AuthController::class, 'login']);




