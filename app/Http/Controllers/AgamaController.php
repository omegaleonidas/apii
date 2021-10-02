<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgamaModel;

class AgamaController extends Controller
{
    public function __construct(){
        $this-> agamaModel = new AgamaModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'agama' => $this->agamaModel->alldata(),
        ];
        return view ('agama.v_agama',$data);
    }

   

    public function tambah(){
        return view ('agama.v_agamaTambah');
    }

    public function insert(){

       Request()->validate([
            'nama_agama' => 'required|min:5|max:255',
           
        ],[

            'nama_agama.required' => 'wajib di isi!',
           
            'nama_agama.min' =>' judul kurang 5 huruf!',
            'nama_agama.max' => ' judul lebih dari 255',
            
        ]
    );

    //jika falidasi tidak ada maka simpan data
 


   
    $data = [
        'nama_agama' => Request()->nama_agama,
       

    ];
    $this ->agamaModel->addData($data);
    return redirect()->route('agama')->with('pesan','Data berhasil di simpan');
    }


    public function edit($id_agama){

        if( !$this->agamaModel->detailData($id_agama)){
            abort(404);
        }

        $data = [
            'agama' => $this->agamaModel->detailData($id_agama),
        ];

        return view ('agama.v_agamaEdit',$data);
    }




    public function update($id_agama){

        Request()->validate([
            'nama_agama' => 'required|min:5|max:255',
           
        ],[

            'nama_agama.required' => 'wajib di isi!',
           
            'nama_agama.min' =>' judul kurang 5 huruf!',
            'nama_agama.max' => ' judul lebih dari 255',
            
        ]
    );
 
     //jika falidasi tidak ada maka simpan data
    
  
        $data = [
            'nama_agama' => Request()->nama_agama,
           
    
        ];
        $this ->agamaModel->editData($id_agama,$data);
     
 
   
     return redirect()->route('agama')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_agama){


        $agama  = $this->agamaModel->detailData($id_agama);
       
        $this ->agamaModel->deleteData($id_agama);
        return redirect()->route('agama')->with('pesan','Data berhasil di hapus');
     }
}
