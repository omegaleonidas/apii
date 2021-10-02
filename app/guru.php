<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
  
    protected $table = "t_pegawai";
    protected $primaryKey = 'id_pegawai';
    protected $fillable = [
        'pegawai'
    ];
  }
