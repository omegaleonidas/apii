<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\absensiController;
use App\Http\Controllers\controllersUser\absensiController1;
use App\Http\Controllers\controllersUser\printController1;
use App\Http\Controllers\controllersUser\cutiController1;
use App\Http\Controllers\informasiController;
use App\Http\Controllers\jabatanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\agamaController;
use App\Http\Controllers\cutiController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\printController;
use App\Http\Middleware;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//absensi




Route::group(['middleware'=>'Admin'],function(){


// pegawai

Route::get('/pegawai',[pegawaiController::class,'index'])->name('pegawai');;
Route::get('/pegawai/add',[pegawaiController::class,'tambah']);;
Route::get('/pegawai/detail/{id_pegawai}',[pegawaiController::class,'detailpegawai']);;
Route::post('/pegawai/insert',[pegawaiController::class,'insert']);;
Route::get('/pegawai/edit/{id_pegawai}',[pegawaiController::class,'edit']);;
Route::post('/pegawai/update/{id_pegawai}',[pegawaiController::class,'update']);;
Route::get('/pegawai/delete/{id_pegawai}',[pegawaiController::class,'delete']);;
//api pegawai
Route::get('/pegawaiShow',[pegawaiController::class,'ApiPegawaiShow']);;
Route::post('/pegawaiTambah',[pegawaiController::class,'ApiPegawaiTambah']);;
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/',[HomeController::class,'index']);
Route::get('/absensi',[absensiController::class,'index'])->name('absensi');;
Route::get('/absensi/detail/{id_absensi}',[absensiController::class,'detailAbsensi']);;
Route::post('/absensi/add',[absensiController::class,'tambah']);;
Route::get('/absensi/edit/{id_absensi}',[absensiController::class,'edit']);;
Route::post('/absensi/update/{id_absensi}',[absensiController::class,'update']);;
Route::get('/absensi/delete/{id_absensi}',[absensiController::class,'delete']);;


//informasi
Route::get('/informasi',[informasiController::class,'index'])->name('informasi');;
Route::get('/informasi/detail/{id_informasi}',[informasiController::class,'detailinformasi']);;
Route::get('/informasi/add',[informasiController::class,'tambah']);;
Route::post('/informasi/insert',[informasiController::class,'insert']);;
Route::get('/informasi/edit/{id_informasi}',[informasiController::class,'edit']);;
Route::post('/informasi/update/{id_informasi}',[informasiController::class,'update']);;
Route::get('/informasi/delete/{id_informasi}',[informasiController::class,'delete']);;

//cuti

//agama
Route::get('/agama',[agamaController::class,'index'])->name('agama');
Route::get('/agama/add',[agamaController::class,'tambah']);;
Route::post('/agama/insert',[agamaController::class,'insert']);
Route::get('/agama/edit/{id_agama}',[agamaController::class,'edit']);
Route::post('/agama/update/{id_agama}',[agamaController::class,'update']);
Route::get('/agama/delete/{id_agama}',[agamaController::class,'delete']);;

Route::get('/user',[RegisterController::class,'index'])->name('user');;
    Route::get('/user/detail/{id_user}',[RegisterController::class,'detailUser']);;
    Route::get('/user/add',[RegisterController::class,'tambah']);;
    Route::post('/user/insert',[RegisterController::class,'insert']);;
    Route::get('/user/edit/{id_user}',[RegisterController::class,'edit']);;
    Route::post('/user/update/{id_user}',[RegisterController::class,'update']);;
    Route::get('/user/delete/{id_user}',[RegisterController::class,'delete']);;
    

    //informasi
Route::get('/informasi',[informasiController::class,'index'])->name('informasi');;
Route::get('/informasi/detail/{id_informasi}',[informasiController::class,'detailinformasi']);;
Route::get('/informasi/add',[informasiController::class,'tambah']);;
Route::post('/informasi/insert',[informasiController::class,'insert']);;
Route::get('/informasi/edit/{id_informasi}',[informasiController::class,'edit']);;
Route::post('/informasi/update/{id_informasi}',[informasiController::class,'update']);;
Route::get('/informasi/delete/{id_informasi}',[informasiController::class,'delete']);;




//jabatan
Route::get('/jabatan',[jabatanController::class,'index'])->name('jabatan');;
Route::get('/jabatan/add',[jabatanController::class,'tambah']);;
Route::post('/jabatan/insert',[jabatanController::class,'insert']);;
Route::get('/jabatan/edit/{id_jabatan}',[jabatanController::class,'edit']);;
Route::post('/jabatan/update/{id_jabatan}',[jabatanController::class,'update']);;
Route::get('/jabatan/delete/{id_jabatan}',[jabatanController::class,'delete']);;
Route::get('/ApiJabatanView',[jabatanController::class,'ApiJabatanView']);;
Route::post('/ApiJabatanAdd',[jabatanController::class,'ApiJabatanAdd']);;
Route::get('/ApiJabatanDelete',[jabatanController::class,'ApiJabatanDelete']);;



//cuti

Route::get('/cuti',[cutiController::class,'index'])->name('cuti');;
Route::get('/cuti/detail/{id_absen}',[cutiController::class,'detailcuti']);;
Route::get('/cuti/edit/{id_cuti}',[cutiController::class,'edit']);;
Route::post('/cuti/update/{id_cuti}',[cutiController::class,'update']);;
Route::get('/cuti/delete/{id_cuti}',[cutiController::class,'delete']);;





Route::get('/report/detailPrint/{id_absensi}',[printController::class,'detailAbsensi']);
Route::get('/report/detail/{id_absensi}',[printController::class,'detailAbsensi1']);
Route::get('/report',[printController::class,'index'])->name('print');;
Route::get('/report/detailPDF/{id_absensi}',[printController::class,'printPDF']);
Route::post('/report/tanggal/{id_absensi}',[printController::class,'Tanggal']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');




Route::get('/',[HomeController::class,'index']);





});


Auth::routes();

Route::group(['middleware'=>'user'],function(){
Route::get('/absensi1',[absensiController1::class,'index'])->name('absensi1');
Route::get('/absensi1/detail/{id_absensi}',[absensiController1::class,'detailAbsensi']);;
Route::post('/absensi1/add',[absensiController1::class,'tambah']);;
Route::get('/absensi1/edit/{id_absensi}',[absensiController1::class,'edit']);;
Route::post('/absensi1/update/{id_absensi}',[absensiController1::class,'update']);;
Route::get('/absensi1/delete/{id_absensi}',[absensiController1::class,'delete']);;
  

//cuti
Route::get('/cuti1',[cutiController1::class,'index'])->name('cuti1');;
Route::get('/cuti1/detail/{id_absen}',[cutiController1::class,'detailcuti']);;
Route::get('/cuti1/edit/{id_cuti}',[cutiController1::class,'edit']);;
Route::post('/cuti1/update/{id_cuti}',[cutiController1::class,'update']);;
Route::get('/cuti1/delete/{id_cuti}',[cutiController1::class,'delete']);;



Route::get('/report1/detailPrint/{id_absensi}',[printController1::class,'printHasil']);
Route::get('/report1/detail1/{id_absensi}',[printController1::class,'detailAbsensi1']);
Route::get('/report1',[printController1::class,'index'])->name('print');;
Route::get('/report1/detailPDF/{id_absensi}',[printController1::class,'printPDF']);
Route::post('/report1/tanggal/{id_absensi}',[printController1::class,'Tanggal']);

Route::get('/logout1',[LoginController::class,'logout1'])->name('logout1');

//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//cuti

Route::get('/dataAbsensiUser/{{{Auth::user()->nip}}',[absensiController::class,'dataAbsensiUser']);
Route::get('/home/{{{Auth::user()->nip}}', [App\Http\Controllers\HomeController::class, 'dataAbsensiUser'])->name('home');
    
});
