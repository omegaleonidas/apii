<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InformasiModel extends Model
{
    public function allData(){
        return  DB::table('t_informasi')->get();
      }
      
     public function detailData($id_informasi){
          return  DB::table('t_informasi')->where('id_informasi', $id_informasi)->first();
        }

    public function addData($data){
        return  DB::table('t_informasi')->insert($data);
    }

    public function editData($id_informasi,$data){
        return  DB::table('t_informasi')  ->where('id_informasi',$id_informasi) ->update($data);
    }

    public function deleteData($id_informasi){
        return  DB::table('t_informasi')  ->where('id_informasi',$id_informasi) ->delete();
    }
    

    
}
