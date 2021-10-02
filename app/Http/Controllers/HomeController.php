<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsensiModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this-> absensiModel = new AbsensiModel();
     
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    public function index()
    {

       return view('layout.v_template');
    }

    public function dataAbsensiUser($id_absensi){

        $data = [
            'absensi' => $this->absensiModel->detailDataRiwayat($id_absensi),
        ];
        return view ('absensi.v_absensiUser',$data);
    }
}
