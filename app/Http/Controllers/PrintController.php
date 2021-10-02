<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\AbsensiModel;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class PrintController extends Controller
{
   

    public function __construct(){
        $this-> absensiModel = new AbsensiModel();
        $this->middleware('auth');

    }

    public function index(){

        $data = [
            'absensi' => $this->absensiModel->detailDataShow(),
        ];
        return view ('print.v_print',$data);
    }




    public function tampilKepegawaian(){
        return view ('print.v_print');
    }



 public function detailAbsensi($id_absensi){

        if( !$this->absensiModel->detailDataRiwayat($id_absensi)){
            abort(404);
        }


        $data = [
            'alfa' => $this->absensiModel->jumlahAlfa($id_absensi),
            'hadir' => $this->absensiModel->jumlahHadir($id_absensi),
            'terlambat' => $this->absensiModel->jumlahTerlambat($id_absensi),
            'cuti' => $this->absensiModel->jumlahIzin($id_absensi),
            'alfa_sore' => $this->absensiModel->jumlahAlfaSore($id_absensi),
            'hadir_sore' => $this->absensiModel->jumlahHadirSore($id_absensi),
            'terlambat_sore' => $this->absensiModel->jumlahTerlambatSore($id_absensi),
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
            'absensi1' => $this->absensiModel->detailDataRiwayat1($id_absensi)
        ];

        

        return view ('print.v_detailPrint',$data);

    }
    public function detailAbsensi1($id_absensi){

        if( !$this->absensiModel->detailDataRiwayat($id_absensi)){
            abort(404);
        }


        $data = [
            'alfa' => $this->absensiModel->jumlahAlfa($id_absensi),
        'hadir' => $this->absensiModel->jumlahHadir($id_absensi),
        'terlambat' => $this->absensiModel->jumlahTerlambat($id_absensi),
        'cuti' => $this->absensiModel->jumlahIzin($id_absensi),
        'alfa_sore' => $this->absensiModel->jumlahAlfaSore($id_absensi),
        'hadir_sore' => $this->absensiModel->jumlahHadirSore($id_absensi),
        'terlambat_sore' => $this->absensiModel->jumlahTerlambatSore($id_absensi),
       
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
            'absensi1' => $this->absensiModel->detailDataRiwayat1($id_absensi),
            'absensi2' => $this->absensiModel->detailDataShow()
        ];

        

        return view ('print.v_detailPrint1',$data);

    }


    public function printPDF($id_absensi){

        if( !$this->absensiModel->detailDataRiwayat($id_absensi)){
            abort(404);
        }

        $data = [
            'alfa' => $this->absensiModel->jumlahAlfa($id_absensi),
        'hadir' => $this->absensiModel->jumlahHadir($id_absensi),
        'terlambat' => $this->absensiModel->jumlahTerlambat($id_absensi),
        'cuti' => $this->absensiModel->jumlahIzin($id_absensi),
        'alfa_sore' => $this->absensiModel->jumlahAlfaSore($id_absensi),
        'hadir_sore' => $this->absensiModel->jumlahHadirSore($id_absensi),
        'terlambat_sore' => $this->absensiModel->jumlahTerlambatSore($id_absensi),
       
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
            'absensi1' => $this->absensiModel->detailDataRiwayat1($id_absensi),
            'absensi2' => $this->absensiModel->detailDataShow()
        ];
        $html= view ('print.v_detailPrint',$data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream();

    }

     public function Tanggal(Request $request,$id_absensi)
    {

        $var = $request->tglAwal;
      
        $var1 = $request->tglAkhir;
       


        $data1 = [
            'alfa' =>  DB::table('t_absensi') 
            ->whereBetween('tanggal', [$var,$var1])
            ->where([
                ['nip', $id_absensi],
                ['keterangan', '=', 'alfa' ],
      
      
            ] ) ->count(),
            
            'hadir' =>  DB::table('t_absensi') 
            ->whereBetween('tanggal', [$var,$var1]) 
            ->where([
                ['nip',  $id_absensi ],
                ['keterangan', '=', 'hadir' ],
        
        
            ] ) ->count(),
            'terlambat' => DB::table('t_absensi') 
            ->whereBetween('tanggal', [$var,$var1]) 
            ->where([
                ['nip',  $id_absensi ],
                ['keterangan', '=', 'terlambat' ],
        
        
            ] ) ->count(),
            'cuti' =>  DB::table('t_cuti') 
            ->whereBetween('tanggal', [$var,$var1]) 
            ->where([
                ['nip',  $id_absensi  ]
               
          
          
            ] ) ->count(),
            'alfa_sore' => DB::table('t_absensi') 
            ->whereBetween('tanggal', [$var,$var1]) 
            ->where([
                ['nip', $id_absensi],
                ['keterangan_sore', '=', 'alfa' ],
          
          
            ] ) ->count(),
            'hadir_sore' =>  DB::table('t_absensi') 
            ->whereBetween('tanggal', [$var,$var1]) 
            ->where([
                ['nip',  $id_absensi ],
                ['keterangan_sore', '=', 'hadir' ],
            
            
            ] ) ->count(),
            'terlambat_sore' => $this->absensiModel->jumlahTerlambatSore($id_absensi),
           
           'absensi1' => $this->absensiModel->detailDataRiwayat1($id_absensi),
            'absensi' =>DB::table('t_absensi')
        


            ->whereBetween('tanggal', [$var,$var1])
            ->where('nip',$id_absensi)
            ->get()
        ];


    $html= view ('print.v_detailPrint',$data1);

    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    //tesr
    
    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');
    
    // Render the HTML as PDF
    $dompdf->render();
    
    // Output the generated PDF to Browser
    $dompdf->stream();


         
       

    }


   
  
}
