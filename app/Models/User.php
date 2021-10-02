<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'nip',
        'nohp',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function allData(){
        return  DB::table('users')->get();
      }

      public function detailData($id_user){
        return  DB::table('users')->where('id', $id_user)->first();
      }

      public function addData($data){
        return  DB::table('users')->insert($data);
    }

      public function editData($id_user,$data){
        return  DB::table('users')  ->where('id',$id_user) ->update($data);
    }



    public function editDataProfile($id_user,$data){
        return  DB::table('users')  ->where('id',$id_user) ->update($data);
    }

    



    public function deleteData($id_user){
        return  DB::table('users')  ->where('id',$id_user) ->delete();
    }
}
