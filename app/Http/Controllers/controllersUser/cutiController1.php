<?php
namespace App\Http\Controllers\controllersUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CutiModel;
use Illuminate\Support\Facades\Validator;

class cutiController1 extends Controller
{
    public function __construct(){
        $this-> cutiModel = new CutiModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'cuti' => $this->cutiModel->alldata(),
        ];

        return view ('cutiUser.v_cuti',$data);
    }

    public function detailcuti($id_cuti){

        if( !$this->cutiModel->detailData($id_cuti)){
            abort(404);
        }

        $data = [
            'cuti' => $this->cutiModel->detailData($id_cuti),
        ];
        return view ('cutiUser.v_detailCuti',$data);

    }

    
    public function update($id_cuti){

            $data = [
            'acc' => 'disetujui'
           
            ];
        $this ->cutiModel->editData($id_cuti,$data);
     
 
   
     return redirect()->route('cuti1')->with('pesan','Data berhasil di ubah');
     }

    public function edit($id_cuti){

        if( !$this->cutiModel->detailData($id_cuti)){
            abort(404);
        }

        $data = [
            'cuti' => $this->cutiModel->detailData($id_cuti),
        ];

        return view ('cutiUser.v_cuti',$data);
    }


     public function delete($id_cuti){


        $cuti  = $this->cutiModel->detailData($id_cuti);
     
        $this ->cutiModel->deleteData($id_cuti);
        return redirect()->route('cuti1')->with('pesan','Data berhasil di hapus');
     }

     public function ApiCutiTambah()
     {

        $data = [
            'cuti' => $this->cutiModel->alldata(),
        ];
       
        
        Request()->validate([
            'nip' => 'required',
            'lama_cuti' => 'required',
            'alasan_cuti' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'tanggal' => 'required',
         ],
    );
    $request = Request();

        $nip = $request->input('nip');
        $lama_cuti = $request->input('lama_cuti');
        $alasan_cuti = $request->input('alasan_cuti');
        $tanggal_mulai = $request->input('tanggal_mulai');
        $tanggal_akhir = $request->input('tanggal_akhir');
        $tanggal = $request->input('tanggal');
        $data =  [
            
            'nip' =>  $nip,
            'lama_cuti' => $lama_cuti,
            'alasan_cuti' => $alasan_cuti,
            'tanggal_mulai' => $tanggal_mulai,
            'tanggal_akhir' => $tanggal_akhir,
            'tanggal' => $tanggal,
                
        ];

        $this->cutiModel->addData($data);
        if ($data) {
           
            return response()->json([
                'success' => true,
                'message' => 'data cuti Berhasil Disimpan!',
                'data' => $data
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data cuti Gagal Disimpan!',
            ], 400);
        }

     }

}
