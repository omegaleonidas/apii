<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jabatanModel;

class JabatanController extends Controller
{
    public function __construct(){
        $this-> jabatanModel = new jabatanModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'jabatan' => $this->jabatanModel->alldata(),
        ];
        return view ('jabatan.v_jabatan',$data);
    }

   

    public function tambah(){
        return view ('jabatan.v_jabatanTambah');
    }

    public function insert(){

       Request()->validate([
            'nama_jabatan' => 'required|min:5|max:255',
           
        ],[

            'nama_jabatan.required' => 'wajib di isi!',
           
            'nama_jabatan.min' =>' judul kurang 5 huruf!',
            'nama_jabatan.max' => ' judul lebih dari 255',
            
        ]
    );

    //jika falidasi tidak ada maka simpan data
 


   
    $data = [
        'nama_jabatan' => Request()->nama_jabatan,
       

    ];
    $this ->jabatanModel->addData($data);
    return redirect()->route('jabatan')->with('pesan','Data berhasil di simpan');
    }


    public function edit($id_jabatan){

        if( !$this->jabatanModel->detailData($id_jabatan)){
            abort(404);
        }

        $data = [
            'jabatan' => $this->jabatanModel->detailData($id_jabatan),
        ];

        return view ('jabatan.v_jabatanEdit',$data);
    }




    public function update($id_jabatan){

        Request()->validate([
            'nama_jabatan1' => 'required|min:5|max:255',
           
        ],[

            'nama_jabatan.required1' => 'wajib di isi!',
           
            'nama_jabatan.min' =>' judul kurang 5 huruf!',
            'nama_jabatan.max' => ' judul lebih dari 255',
            
        ]
    );
 
     //jika falidasi tidak ada maka simpan data
    
  
        $data = [
            'nama_jabatan' => Request()->nama_jabatan,
           
    
        ];
        $this ->jabatanModel->editData($id_jabatan,$data);
     
 
   
     return redirect()->route('jabatan')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_jabatan){


        $jabatan  = $this->jabatanModel->detailData($id_jabatan);
       
        $this ->jabatanModel->deleteData($id_jabatan);
        return redirect()->route('jabatan')->with('pesan','Data berhasil di hapus');
     }

      
     public function ApiJabatanView()
     {
        $data = [
            'jabatan' => $this->jabatanModel->alldata(),
        ];

       
        return   response()->json($data);
     }

     public function ApiJabatanAdd(Request $request)
     {
       
        $request->validate([
            'nama_jabatan' => 'required'
           
        ]);

  //  $this-> jabatanModel = new jabatanModel();
        $jabatan = new JabatanModel;
        $jabatan->nama_jabatan = $request->nama_jabatan;
       
        $jabatan->save();

        return response()->json([
                'message'       => 'jabatan Berhasil Ditambahkan',
                'data_student'  => $jabatan
            ], 200);
    
    
     }


     public function ApiJabatanDelete($id_jabatan)
     {
        $jabatan  = $this->jabatanModel->detailData($id_jabatan);
       
        $this ->jabatanModel->deleteData($id_jabatan);
        return   response()->json($jabatan);
     }
}
