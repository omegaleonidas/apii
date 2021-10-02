<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\controllersUser\AbsensiController1;
use App\Http\Controllers\controllersUser\PrintController1;
use App\Http\Controllers\controllersUser\CutiController1;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrintController;
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


//tes

Route::group(['middleware'=>'Admin'],function(){


// pegawai

Route::get('/pegawai',[PegawaiController::class,'index'])->name('pegawai');;
Route::get('/pegawai/add',[PegawaiController::class,'tambah']);;
Route::get('/pegawai/detail/{id_pegawai}',[PegawaiController::class,'detailpegawai']);;
Route::post('/pegawai/insert',[PegawaiController::class,'insert']);;
Route::get('/pegawai/edit/{id_pegawai}',[PegawaiController::class,'edit']);;
Route::post('/pegawai/update/{id_pegawai}',[PegawaiController::class,'update']);;
Route::get('/pegawai/delete/{id_pegawai}',[PegawaiController::class,'delete']);;
//api pegawai
Route::get('/pegawaiShow',[PegawaiController::class,'ApiPegawaiShow']);;
Route::post('/pegawaiTambah',[PegawaiController::class,'ApiPegawaiTambah']);;
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/',[HomeController::class,'index']);
Route::get('/absensi',[AbsensiController::class,'index'])->name('absensi');;
Route::get('/absensi/detail/{id_absensi}',[AbsensiController::class,'detailAbsensi']);;
Route::post('/absensi/add',[AbsensiController::class,'tambah']);;
Route::get('/absensi/edit/{id_absensi}',[AbsensiController::class,'edit']);;
Route::post('/absensi/update/{id_absensi}',[AbsensiController::class,'update']);;
Route::get('/absensi/delete/{id_absensi}',[AbsensiController::class,'delete']);;


//informasi
Route::get('/informasi',[InformasiController::class,'index'])->name('informasi');;
Route::get('/informasi/detail/{id_informasi}',[InformasiController::class,'detailinformasi']);;
Route::get('/informasi/add',[InformasiController::class,'tambah']);;
Route::post('/informasi/insert',[InformasiController::class,'insert']);;
Route::get('/informasi/edit/{id_informasi}',[InformasiController::class,'edit']);;
Route::post('/informasi/update/{id_informasi}',[InformasiController::class,'update']);;
Route::get('/informasi/delete/{id_informasi}',[InformasiController::class,'delete']);;

//cuti

//agama
Route::get('/agama',[AgamaController::class,'index'])->name('agama');
Route::get('/agama/add',[AgamaController::class,'tambah']);;
Route::post('/agama/insert',[AgamaController::class,'insert']);
Route::get('/agama/edit/{id_agama}',[AgamaController::class,'edit']);
Route::post('/agama/update/{id_agama}',[AgamaController::class,'update']);
Route::get('/agama/delete/{id_agama}',[AgamaController::class,'delete']);;

Route::get('/user',[RegisterController::class,'index'])->name('user');;
    Route::get('/user/detail/{id_user}',[RegisterController::class,'detailUser']);;
    Route::get('/user/add',[RegisterController::class,'tambah']);;
    Route::post('/user/insert',[RegisterController::class,'insert']);;
    Route::get('/user/edit/{id_user}',[RegisterController::class,'edit']);;
    Route::post('/user/update/{id_user}',[RegisterController::class,'update']);;
    Route::get('/user/delete/{id_user}',[RegisterController::class,'delete']);;
    

    //informasi
Route::get('/informasi',[InformasiController::class,'index'])->name('informasi');;
Route::get('/informasi/detail/{id_informasi}',[InformasiController::class,'detailinformasi']);;
Route::get('/informasi/add',[InformasiController::class,'tambah']);;
Route::post('/informasi/insert',[InformasiController::class,'insert']);;
Route::get('/informasi/edit/{id_informasi}',[InformasiController::class,'edit']);;
Route::post('/informasi/update/{id_informasi}',[InformasiController::class,'update']);;
Route::get('/informasi/delete/{id_informasi}',[InformasiController::class,'delete']);;




//jabatan
Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan');;
Route::get('/jabatan/add',[JabatanController::class,'tambah']);;
Route::post('/jabatan/insert',[JabatanController::class,'insert']);;
Route::get('/jabatan/edit/{id_jabatan}',[JabatanController::class,'edit']);;
Route::post('/jabatan/update/{id_jabatan}',[JabatanController::class,'update']);;
Route::get('/jabatan/delete/{id_jabatan}',[JabatanController::class,'delete']);;
Route::get('/ApiJabatanView',[JabatanController::class,'ApiJabatanView']);;
Route::post('/ApiJabatanAdd',[JabatanController::class,'ApiJabatanAdd']);;
Route::get('/ApiJabatanDelete',[JabatanController::class,'ApiJabatanDelete']);;



//cuti

Route::get('/cuti',[CutiController::class,'index'])->name('cuti');;
Route::get('/cuti/detail/{id_absen}',[CutiController::class,'detailcuti']);;
Route::get('/cuti/edit/{id_cuti}',[CutiController::class,'edit']);;
Route::post('/cuti/update/{id_cuti}',[CutiController::class,'update']);;
Route::get('/cuti/delete/{id_cuti}',[CutiController::class,'delete']);;





Route::get('/report/detailPrint/{id_absensi}',[PrintController::class,'detailAbsensi']);
Route::get('/report/detail/{id_absensi}',[PrintController::class,'detailAbsensi1']);
Route::get('/report',[PrintController::class,'index'])->name('print');;
Route::get('/report/detailPDF/{id_absensi}',[PrintController::class,'printPDF']);
Route::post('/report/tanggal/{id_absensi}',[PrintController::class,'Tanggal']);
Route::get('/logout',[LoginController::class,'logout']);




Route::get('/',[HomeController::class,'index']);





});


Auth::routes();

Route::group(['middleware'=>'user'],function(){
Route::get('/absensi1',[AbsensiController1::class,'index'])->name('absensi1');
Route::get('/absensi1/detail/{id_absensi}',[AbsensiController1::class,'detailAbsensi']);;
Route::post('/absensi1/add',[AbsensiController1::class,'tambah']);;
Route::get('/absensi1/edit/{id_absensi}',[AbsensiController1::class,'edit']);;
Route::post('/absensi1/update/{id_absensi}',[AbsensiController1::class,'update']);;
Route::get('/absensi1/delete/{id_absensi}',[AbsensiController1::class,'delete']);;
  

//cuti
Route::get('/cuti1',[CutiController1::class,'index'])->name('cuti1');;
Route::get('/cuti1/detail/{id_absen}',[CutiController1::class,'detailcuti']);;
Route::get('/cuti1/edit/{id_cuti}',[CutiController1::class,'edit']);;
Route::post('/cuti1/update/{id_cuti}',[CutiController1::class,'update']);;
Route::get('/cuti1/delete/{id_cuti}',[CutiController1::class,'delete']);;



Route::get('/report1/detailPrint/{id_absensi}',[PrintController1::class,'printHasil']);
Route::get('/report1/detail1/{id_absensi}',[PrintController1::class,'detailAbsensi1']);
Route::get('/report1',[PrintController1::class,'index'])->name('print1');;
Route::get('/report1/detailPDF/{id_absensi}',[PrintController1::class,'printPDF']);
Route::post('/report1/tanggal/{id_absensi}',[PrintController1::class,'Tanggal']);

Route::get('/logout1',[LoginController::class,'logout1'])->name('logout1');

//     Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//cuti

Route::get('/dataAbsensiUser/{{{Auth::user()->nip}}',[AbsensiController::class,'dataAbsensiUser']);
//Route::get('/home/{{{Auth::user()->nip}}', [App\Http\Controllers\HomeController::class, 'dataAbsensiUser'])->name('home');
    
});
