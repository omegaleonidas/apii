<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PegawaiModel;
use App\guru;

class ApiPegawai extends Controller
{
    public function create(Request $request){



    //jika falidasi tidak ada maka simpan data
    //upload foto 


    
     $pegawai = new guru();
        
     $pegawai->nip = $request->input('nip');
     $pegawai->nama_pegawai = $request->input('nama_pegawai');
     $pegawai->jabatan_id = $request->input('jabatan_id');
     $pegawai->email = $request->input('email');
     $pegawai->no_tlp = $request->input('no_tlp');
     $pegawai->alamat = $request->input('alamat');
     $pegawai->tgl_masuk = $request->input('tgl_masuk');
     $pegawai->tmp_lahir = $request->input('tmp_lahir');
     $pegawai->id_agama = $request->input('id_agama');
     $pegawai->gender = $request->input('gender');
     $pegawai->pendidikan = $request->input('pendidikan');

  
     $result= $request->file('foto')->store('apiDocs');
     $pegawai->foto = $result;
     
     

        $pegawai->save();
        if ($pegawai) {
            
            return response()->json([
                'success' => true,
                'message' => 'pegawai tambah!',
                'data' => $pegawai
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'pegawai tidak di ditampilkan',
            ], 400);
        }

    }

    public function show(){

        $pegawai = guru::all();
        return response()->json($pegawai);
    }

    public function showById($id_pegawai)
    {
        $pegawai = guru::find($id_pegawai);
        return response()->json($pegawai);
    }

    public function updateById( $id_pegawai){
  
        Request()->validate([
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jabatan_id' => 'required',
            'email' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'tgl_masuk' => 'required',
            'tmp_lahir' => 'required',
            'gender' => 'required',
            'id_agama' => 'required',
            'pendidikan' => 'required',
           
        ],
    );

    //jika falidasi tidak ada maka simpan data
    //upload foto 


    $file= Request()->foto;
    $fileName = Request()->nip . '.' . $file->extension();
    $file->move(public_path('foto_pegawai'), $fileName);

    $data = [
        'nip' => Request()->nip,
        'nama_pegawai' =>  Request()->nama_pegawai,
        'jabatan_id' =>  Request()->jabatan_id,
        'email' =>  Request()->email,
        'no_tlp' =>  Request()->no_tlp,
        'alamat' =>  Request()->alamat,
        'tgl_masuk' => Request()->tgl_masuk,
        'tmp_lahir' => Request()->tmp_lahir,
        'gender' =>  Request()->gender,
        'id_agama' =>  Request()->id_agama,
        'pendidikan' =>  Request()->pendidikan,
        'foto'=>  $fileName,

    ];
    $this->pegawaiModel->editDataApi( $id_pegawai,$data);
    if ($data) {
           
       return response()->json([
           'success' => true,
           'message' => 'pegawai update!',
           'data' => $data
       ], 201);
   } else {
       return response()->json([
           'success' => false,
           'message' => 'pegawai tidak di ditampilkan',
       ], 400);
   }
    }

    public function deleteById(Request $request, $id){

        $pegawai = guru::find($id);
        $pegawai->delete();
        return response()->json($pegawai);  
    }


    public function insert(){
        

        Request()->validate([
             'nip' => 'required',
             'nama_pegawai' => 'required',
             'jabatan_id' => 'required',
             'email' => 'required',
             'no_tlp' => 'required',
             'alamat_pegawai' => 'required',
             'tgl_masuk' => 'required',
             'tmp_lahir' => 'required',
             'gender' => 'required',
             'id_agama' => 'required',
             'pendidikan' => 'required',
            
         ],
     );
 
     //jika falidasi tidak ada maka simpan data
     //upload foto 
 
 
     $file= Request()->foto;
     $fileName = Request()->nip . '.' . $file->extension();
     $file->move(public_path('foto_pegawai'), $fileName);
 
     $data = [
         'nip' => Request()->nip,
         'nama_pegawai' =>  Request()->nama_pegawai,
         'jabatan_id' =>  Request()->jabatan_id,
         'email' =>  Request()->email,
         'no_tlp' =>  Request()->no_tlp,
         'alamat_pegawai' =>  Request()->alamat_pegawai,
         'tgl_masuk' => Request()->tgl_masuk,
         'tmp_lahir' => Request()->tmp_lahir,
         'gender' =>  Request()->gender,
         'id_agama' =>  Request()->id_agama,
         'pendidikan' =>  Request()->pendidikan,
         'foto'=>  $fileName,
 
     ];
     $this->pegawaiModel->addData($data);
     if ($data) {
            
        return response()->json([
            'success' => true,
            'message' => 'pegawai tambah!',
            'data' => $data
        ], 201);
    } else {
        return response()->json([
            'success' => false,
            'message' => 'pegawai tidak di ditampilkan',
        ], 400);
    }
     }

     

     public function __construct(){
        $this-> pegawaiModel = new pegawaiModel();
      //  $this->middleware('auth');

    }

 

}
