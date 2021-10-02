<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class ApiController extends Controller
{
    public function create(Request $request){
  
        $student = new Mahasiswa();
        
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->email = $request->input('email');
        $student->password = $request->input('password');

        $student->save();
        return response()->json($student);
    }

    public function show(){

        $student = Mahasiswa::all();
        return response()->json($student);
    }

    public function showById($id)
    {
        $student = Mahasiswa::find($id);
        return response()->json($student);
    }

    public function updateById(Request $request, $id){

        $student = Mahasiswa::find($id);
        $student ->fname = $request->input ('fname');
        $student ->lname = $request->input ('lname');
        $student ->email = $request->input ('email');
        $student ->password = $request->input ('password');
        $student-> save();
        return response()->json($student);

    }

    public function deleteById(Request $request, $id){

        $student = Mahasiswa::find($id);
        $student->delete();
        return response()->json($student);  
    }

    
}
