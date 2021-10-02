<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller

{
   
    public function index(){

        $data = [
            'user' => $this->userModel->alldata(),
        ];
        return view ('user.v_user',$data);
    }


    public function insert(){

        Request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required'],
            'nohp' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
 

 
     $data = [
        'name' => Request()->name,
        'nip' => Request()->nip,
        'nohp' => Request()->nohp,
        'email' => Request()->email,
        'password' => Hash::make(Request()->password),
    ];
     $this ->userModel->addData($data);
     return redirect()->route('user')->with('pesan','Data berhasil di simpan');
     }


    public function detailUser($id_user){

        if( !$this->userModel->detailData($id_user)){
            abort(404);
        }

        $data = [
            'user' => $this->userModel->detailData($id_user),
        ];
        return view ('user.v_detail_user',$data);

    }

    public function tambah(){
        return view ('user.v_userTambah');
    }

   
 


     use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this-> userModel = new User();
       // $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required'],
            'nohp' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'nip' => $data['nip'],
            'nohp' => $data['nohp'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('user')->with('pesan','Data berhasil di simpan');

        
    }

    public function edit($id_user){

        if( !$this->userModel->detailData($id_user)){
            abort(404);
        }

        $data = [
            'user' => $this->userModel->detailData($id_user),
        ];

        return view ('user.v_userEdit',$data);
    }




    public function update($id_user){

        Request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'nip' => ['required'],
            'nohp' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
 
     
    
     
        $data = [
            'name' => Request()->name,
            'nip' => Request()->nip,
            'nohp' => Request()->nohp,
            'email' => Request()->email,
            'password' => Hash::make(Request()->password),

          
         
    
        ];
        $this ->userModel->editData($id_user,$data);
     
 
   
     return redirect()->route('user')->with('pesan','Data berhasil di ubah');
     }


     public function delete($id_user){


        $user  = $this->userModel->detailData($id_user);
       
        $this ->userModel->deleteData($id_user);
        return redirect()->route('user')->with('pesan','Data berhasil di hapus');
     }

       public function updateProfile($id_user){
 
        $data = [
            'name' => Request()->name,
            'nip' => Request()->nip,
            'nohp' => Request()->nohp,
            'email' => Request()->email,
            'password' => Hash::make(Request()->password),
        ];
        $this ->userModel->editDataProfile($id_user,$data);
     
        if ($data) {
           
            return response()->json([
                'success' => true,
                'message' => 'user update!',
                'data' => $data
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'user tidak di ditampilkan',
            ], 400);
        }
     }



}
