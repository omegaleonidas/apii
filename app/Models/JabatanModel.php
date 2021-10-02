<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class JabatanModel extends Model
{
    
    protected $table = "t_jabatan";
    protected $primaryKey = 'id_jabatan';
    protected $fillable = [
        'jabatan'
    ];

    public function allData(){
        return  DB::table('t_jabatan')->get();
      }
      
       public function addData($data){
        return  DB::table('t_jabatan')->insert($data);
    }

    public function editData($id_jabatan,$data){
        return  DB::table('t_jabatan')  ->where('id_jabatan',$id_jabatan) ->update($data);
    }

    public function deleteData($id_jabatan){
        return  DB::table('t_jabatan')  ->where('id_jabatan',$id_jabatan) ->delete();
    }

    public function detailData($id_jabatan){
        return  DB::table('t_jabatan')->where('id_jabatan', $id_jabatan)->first();
      }
    

}
