<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiModel;

class AbsensiController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

        $this-> absensiModel = new AbsensiModel();
     
    }

    public function index(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensi.v_absensi',$data);
    }

    public function detailAbsensi($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];
        return view ('absensi.v_detailAbsensi',$data);

    }

    public function edit($id_absensi){

        if( !$this->absensiModel->detailData($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailData($id_absensi),
        ];

        return view ('absensi.v_absensiEdit',$data);
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
     
 
   
     return redirect()->route('absensi')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_absensi){


        $absensi  = $this->absensiModel->detailData($id_absensi);
     
        $this ->absensiModel->deleteData($id_absensi);
        return redirect()->route('absensi')->with('pesan','Data berhasil di hapus');
     }

     public function dataAbsensi(){

        $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
        return view ('absensi.v_absensi',$data);
    }

    public function dataAbsensiUser($id_absensi){

        $data = [
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
        ];

        return view ('absensi.v_absensiUser',$data);
    }
     public function ApiAbsensiShow()
     {
       $data = [
           'absensi' => $this ->absensiModel->alldata(),
        ];
        date_default_timezone_set('Asia/Jakarta');
    
             $date = date('H:i:s');

       if ($data) {
            
        return response()->json([
            'success' => true,
            'message' => 'informasi ditampilkan !',
            'data' => $data

        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'informasi tidak ditampilkan',
        ], 400);
    }

     }

     public function detailAbsensiShow($id_absensi){

        if( !$this->absensiModel->detailDataRiwayat($id_absensi)){
            abort(404);
        }

        $data = [
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
        ];
        if ($data) {
            
            return response()->json([
                'success' => true,
                'message' => 'informasi riwayat!',
                'data' => $data
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'informasi tidak ditampilkan',
            ], 400);
        }

    }

    public function ApiAbsensi()

    {
          $data = [
            'absensi' => $this->absensiModel->alldata(),
        ];
       
        
        Request()->validate([
      
            'nip' => 'required',
          
            'tanggal' => 'required',
            'jam_masuk' => 'required',
          
            'alamat' => 'required',
            'keterangan'=>'required'
        
            
        ],
    );

    $request = Request();

  
    $nip = $request->input('nip');
        
        $tanggal = $request->input('tanggal');
        
        $jam_masuk = $request->input('jam_masuk');
        
        $jam_selesai = $request->input('jam_selesai');
        
        $alamat = $request->input('alamat');
        
        $keterangan = $request->input('keterangan');

 
        

        $data =  [
           
            'nip' =>  $nip,
            'tanggal' => $tanggal,
            'jam_masuk' => $jam_masuk,
             'jam_selesai' => $jam_selesai,
            'alamat' => $alamat,
            'keterangan' => $keterangan,
                
        ];

        $data1 = absensiModel::create($data);
        $id_absensi = $data1->id_absensi;


      
        if ($data1) {
            
            return response()->json([
                'success' => true,
                'message' => 'data absensi Berhasil Disimpan!',
                'data' => $data1
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data absensi Gagal Disimpan!',
            ], 400);
        }

       
    
    }




    public function InsertDataSore($id_absensi){

      
        $data = [
            
            'jam_selesai' => Request()-> jam_selesai,
           
                     
        ];


        $this ->absensiModel->editData($id_absensi,$data);
     
 
   
        if ($data) {
            
            return response()->json([
                'success' => true,
                'message' => 'data absensi Berhasil Diedit!',
                'data' => $data
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data absensi Gagal Disimpan!',
            ], 404);
        }
     }



     public function ApiAbsensiEdit($id_absensi){
  
    
 

    $data = [
       
        'jam_selesai' => Request()-> jam_selesai,
        'alamat_sore' => Request()-> alamat_sore,
        'keterangan_sore' => Request()-> keterangan_sore,
        
       
    ];
    $this ->absensiModel->editData($id_absensi,$data);
   
 
   
   if ($data) {
          
    return response()->json([
        'success' => true,
        'message' => 'absensi Berhasil Disimpan!',
        'data' => $data
    ], 201);
} else {
    return response()->json([
        'success' => false,
        'message' => 'absensi Gagal Disimpan!',
    ], 400);
}





}

public function time(){
    date_default_timezone_set('Asia/Jakarta');
    
    $date = [

        'Hour'=>Date('H'),
        'minute'=>Date('i'),
        'jam'=>Date('H:i:s'),
        'date'=>Date('Y-m-d'),
        'date_time'=>Date('Y-m-d H:i:s')



    ];
    return response()->json([
       
        'data' => $date
    ], 201); 
}

public function ApiHitung($id_absensi){

    $data = [
        'alfa' => $this->absensiModel->jumlahAlfa($id_absensi),
        'hadir' => $this->absensiModel->jumlahHadir($id_absensi),
        'terlambat' => $this->absensiModel->jumlahTerlambat($id_absensi),
        'cuti' => $this->absensiModel->jumlahIzin($id_absensi),
        'alfa_sore' => $this->absensiModel->jumlahAlfaSore($id_absensi),
        'hadir_sore' => $this->absensiModel->jumlahHadirSore($id_absensi),
        'terlambat_sore' => $this->absensiModel->jumlahTerlambatSore($id_absensi),
       
        
    ];

    if ($data) {
        
        return response()->json([
            'success' => true,
            'message' => 'data Berhasil ditampilkan !',
            'data' => $data
        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'data tidak ditampilkan',
        ], 400);
       echo("error");
    }
 
}
}
