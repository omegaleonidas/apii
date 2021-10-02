<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AbsensiModel extends Model
{


  protected $table = "t_absensi";
  protected $primaryKey = 'id_absensi';

  protected $fillable = [
      'id_absensi','nip','tanggal','jam_masuk','jam_selesai','alamat','keterangan'
  ];


    public function allData(){
      return  DB::table('t_absensi')->get();
    }
    
    public function detailData($id_absensi){
        return  DB::table('t_absensi')
        ->leftJoin('t_pegawai', 't_pegawai.nip', '=', 't_absensi.nip')
        ->where('id_absensi', $id_absensi)->first();

    }

    public function detailDataShow(){
      return  DB::table('t_pegawai')
   

      ->get();

  }

    
    public function editData($id_absensi,$data){
      return  DB::table('t_absensi') ->where('id_absensi',$id_absensi) ->update($data);
  }

  public function deleteData($id_absensi){
      return  DB::table('t_absensi')  ->where('id_absensi',$id_absensi) ->delete();
  }

  public function detailDataRiwayat($id_absensi){
    return  DB::table('t_absensi') ->where('nip', $id_absensi) ->get() ;
}

public function detailDataRiwayat1($id_absensi){
  return  DB::table('t_absensi')
  ->leftJoin('t_pegawai', 't_absensi.nip', '=', 't_pegawai.nip')
  ->where('t_absensi.nip',$id_absensi)->first();

}

    public function addData($data) {
      return  DB::table('t_absensi')->insert($data);
    }

    public function detailAbsensiData($id_absensi){
      return  DB::table('t_absensi')
     
       
      ->where('id_absensi', $id_absensi)
      ->first();
    
    
    }


    public function jumlahAlfa($id_absensi){
      return  DB::table('t_absensi')  ->where([
          ['nip', $id_absensi],
          ['keterangan', '=', 'alfa' ],


      ] ) ->count();
  }
  public function jumlahHadir($id_absensi){
    return  DB::table('t_absensi')  ->where([
        ['nip',  $id_absensi ],
        ['keterangan', '=', 'hadir' ],


    ] ) ->count();
}

public function jumlahTerlambat($id_absensi){
  return  DB::table('t_absensi')  ->where([
      ['nip',  $id_absensi  ],
      ['keterangan', '=', 'terlambat' ],


  ] ) ->count();
}

public function jumlahIzin($id_absensi){
  return  DB::table('t_cuti')  ->where([
      ['nip',  $id_absensi  ]
     


  ] ) ->count();
}


public function jumlahAlfaSore($id_absensi){
  return  DB::table('t_absensi')  ->where([
      ['nip', $id_absensi],
      ['keterangan_sore', '=', 'alfa' ],


  ] ) ->count();
}
public function jumlahHadirSore($id_absensi){
return  DB::table('t_absensi')  ->where([
    ['nip',  $id_absensi ],
    ['keterangan_sore', '=', 'hadir' ],


] ) ->count();
}

public function jumlahTerlambatSore($id_absensi){
return  DB::table('t_absensi')  ->where([
  ['nip',  $id_absensi  ],
  ['keterangan_sore', '=', 'terlambat' ],


] ) ->count();
}
}
