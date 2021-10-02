<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\informasiModel;
//use DateTime;

class InformasiController extends Controller
{
    public function __construct(){
        $this-> informasiModel = new informasiModel();
       $this->middleware('auth');

    }

    public function index(){

        $data = [
            'informasi' => $this->informasiModel->alldata(),

        ];
        return view ('informasi.v_informasi',$data);
    }

    public function detailinformasi($id_informasi){

        if( !$this->informasiModel->detailData($id_informasi)){
            abort(404);
        }

        $data = [
            'informasi' => $this->informasiModel->detailData($id_informasi),
        ];
        return view ('informasi.v_detail_informasi',$data);

    }

    public function tambah(){
        return view ('informasi.v_informasiTambah');
    }

    public function insert(){

       Request()->validate([
            'judul' => 'required|unique:t_informasi|min:5|max:255',
            'descripsi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,bmp,png| max:1024',
        ],[

            'judul.required' => 'wajib di isi!',
            'judul.unique' => ' judul sudah ada! ',
            'judul.min' =>' judul kurang 5 huruf!',
            'judul.max' => ' judul lebih dari 255',
            'descripsi.required' => ' wajib di isi',
            'gambar.required' => ' wajib di isi',
            'gambar.mimes' => ' harus bertype jpg,jpeg,bmp,png ',
        ]
    );

    //jika falidasi tidak ada maka simpan data
    //upload gambar 


    $file= Request()->gambar;
    $fileName = Request()->judul . '.' . $file->extension();
    $file->move(public_path('foto_informasi'), $fileName);

    $data = [
        'judul' => Request()->judul,
        'descripsi' => Request()-> descripsi,
        'gambar'=>  $fileName,

    ];
    $this ->informasiModel->addData($data);
    return redirect()->route('informasi')->with('pesan','Data berhasil di simpan');
    }


    public function edit($id_informasi){

        if( !$this->informasiModel->detailData($id_informasi)){
            abort(404);
        }

        $data = [
            'informasi' => $this->informasiModel->detailData($id_informasi),
        ];

        return view ('informasi.v_informasiEdit',$data);
    }




    public function update($id_informasi){

        Request()->validate([
             'judul' => 'required|min:5|max:255',
             'descripsi' => 'required',
             'gambar' => 'mimes:jpg,jpeg,bmp,png| max:1024',
         ],[
 
             'judul.required' => 'wajib di isi!',
             'judul.unique' => ' judul sudah ada! ',
             'judul.min' =>' judul kurang 5 huruf!',
             'judul.max' => ' judul lebih dari 255',
             'descripsi.required' => ' wajib di isi',
         
          
         ]
     );
 
     //jika falidasi tidak ada maka simpan data
     //upload gambar 
 
     if(Request()-> gambar <> ""){

        $file= Request()->gambar;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('foto_informasi'), $fileName);
    
        $data = [
            'judul' => Request()->judul,
            'descripsi' => Request()-> descripsi,
            'gambar'=>  $fileName,
    
        ];
        $this ->informasiModel->editData($id_informasi,$data);
       

     }else{

     
        $data = [
            'judul' => Request()->judul,
            'descripsi' => Request()-> descripsi,
         
    
        ];
        $this ->informasiModel->editData($id_informasi,$data);
     }
 
   
     return redirect()->route('informasi')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_informasi){


        $informasi  = $this->informasiModel->detailData($id_informasi);
        if($informasi-> gambar <> ""){
            unlink(public_path('foto_informasi'). '/'. $informasi->gambar); 
        }
        $this ->informasiModel->deleteData($id_informasi);
        return redirect()->route('informasi')->with('pesan','Data berhasil di hapus');
     }

   
public function apiInformasiShow()
{
    $data = [
        'informasi' => $this->informasiModel->alldata(),
    ];
    
    
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
       echo("error");
    }

}



    }


