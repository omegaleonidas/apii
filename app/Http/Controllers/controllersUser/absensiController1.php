<?php

namespace App\Http\Controllers\controllersUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\absensimodel;

class absensiController1 extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this-> absensiModel = new absensiModel();
     
    }

    public function index(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensiUser.v_absensi1',$data);
    }

    public function detailAbsensi($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];
        return view ('absensiUser.v_detailabsensi1',$data);

    }

    public function edit($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];

        return view ('absensiUser.v_absensiEdit1',$data);
    }




    public function update($id_absensi){

        Request()->validate([
             'nip' => 'required',
             'tanggal' => 'required',
             'jam_masuk' => 'required',
             'jam_selesai' => 'required',
             'alamat' => 'required',
             'keterangan' => 'required',
             
         ],[
 
             'nip.required' => 'wajib di isi!',
              'tanggal.required' => ' wajib di isi',
              'jam_masuk.required' => ' wajib di isi',
              'jam_selesai.required' => ' wajib di isi',
              'alamat.required' => ' wajib di isi',
              'keterangan.required' => ' wajib di isi',
                          
         ]
     );
 
     //jika falidasi tidak ada maka simpan data

        
        $data = [
            'nip' => Request()->nip,
            'tanggal' => Request()-> tanggal,
            'jam_masuk' => Request()-> jam_masuk ,
            'jam_selesai' => Request()-> jam_selesai ,
            'alamat' => Request()-> alamat ,
            'alamat_sore' => Request()-> alamat_sore ,
            'keterangan' => Request()-> keterangan ,
            'keterangan_sore' => Request()-> keterangan_sore ,
         
    
        ];
        $this ->absensiModel->editData($id_absensi,$data);
     
 
   
     return redirect()->route('absensi1')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_absensi){


        $absensi  = $this->absensiModel->detailData($id_absensi);
     
        $this ->absensiModel->deleteData($id_absensi);
        return redirect()->route('absensi1')->with('pesan','Data berhasil di hapus');
     }

     public function dataAbsensi(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensiUser.v_absensi1',$data);
    }

    public function dataAbsensiUser($id_absensi){

        $data = [
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
        ];

        return view ('absensiUser.v_absensiUser1',$data);
    }


  
}
