<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PegawaiModel extends Model
{

  protected $table = "t_pegawai";
  protected $primaryKey = 'id_pegawai';
  protected $fillable = [
      'pegawai'
  ];

    public function allData(){
        return  DB::table('t_pegawai')
       
        ->get();
}

      public function allDataAgama(){
        return  DB::table('t_agama')
       
        ->get();

        
      }
      public function allDataJabatan(){
        return  DB::table('t_jabatan') ->get();

        
      }


      
     public function detailData($id_pegawai){
          return  DB::table('t_pegawai')
          ->leftJoin('t_jabatan', 't_jabatan.id_jabatan', '=', 't_pegawai.jabatan_id')
             ->leftJoin('t_agama', 't_agama.id_agama', '=', 't_pegawai.id_agama')
          ->where('id_pegawai', $id_pegawai)
          ->first();
        }

        public function detailDataApi($id_pegawai){
          return  DB::table('t_pegawai')
          ->leftJoin('t_jabatan', 't_jabatan.id_jabatan', '=', 't_pegawai.jabatan_id')
             ->leftJoin('t_agama', 't_agama.id_agama', '=', 't_pegawai.id_agama')
          ->where('nip', $id_pegawai)
          ->first();
        }

 
    public function addData($data){
        return  DB::table('t_pegawai')->insert($data);
    }
    
    public function editData($id_pegawai,$data){
        return  DB::table('t_pegawai')
                   ->where('id_pegawai',$id_pegawai) ->update($data);
    }
    public function editDataApi($id_pegawai,$data){
      return  DB::table('t_pegawai')
                 ->where('nip',$id_pegawai) ->update($data);
      
  }


    public function deleteData($id_pegawai){
        return  DB::table('t_pegawai')  ->where('id_pegawai',$id_pegawai) ->delete();
    }


}
