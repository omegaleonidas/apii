<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa1';
    protected $filllable = ['fname','lname','email','password'];
}
