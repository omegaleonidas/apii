<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AgamaModel extends Model
{
    public function allData(){
        return  DB::table('t_agama')->get();
      }
      
       public function addData($data){
        return  DB::table('t_agama')->insert($data);
    }

    public function editData($id_agama,$data){
        return  DB::table('t_agama')  ->where('id_agama',$id_agama) ->update($data);
    }

    public function deleteData($id_agama){
        return  DB::table('t_agama')  ->where('id_agama',$id_agama) ->delete();
    }

    public function detailData($id_agama){
        return  DB::table('t_agama')->where('id_agama', $id_agama)->first();
      }
    
}
