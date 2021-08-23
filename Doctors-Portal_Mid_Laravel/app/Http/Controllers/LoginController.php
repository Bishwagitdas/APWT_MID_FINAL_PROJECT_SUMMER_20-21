<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
     public function login(){
        return view('doctor.login');
     }
   


      public function verify(Request $req){

                    
      //   if($req->username == "" || $req->password == ""){
      //    $req->session()->flash('msg', 'null username or password...');
      //    return redirect('/login');

      // }

         $validation = Validator::make($req->all(), [ 'email' => 'required', 'password' => 'required']);
        if($validation->fails()){
         //   return redirect()->route('home.create')->with('errors', $validation->errors());
            return Back()->with('errors', $validation->errors())->withInput();            
        }
        $doctor = DB::table('doctor')
                    ->where('email', $req->email)
                    ->where('password', $req->password)
                    ->get();
                    foreach ($doctor as $doc){
                        $id       = $doc -> id;
                        $email    = $doc -> email;
                        $password = $doc -> password;
                        $username = $doc -> username;
                
                    }

        if(count($doctor) > 0 ){
         
            $req->session()->put('email', $req->email);
            $req->session()->put('id', $id);
            return redirect('/index');
        }else{

            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }
        $user = DB::table('user')
                    ->where('email', $req->email)
                    ->where('password', $req->password)
                    ->get();

        if(count($user) > 0 ){
         
            $req->session()->put('email', $req->email);
            return redirect('/index');
        }else{

            $req->session()->flash('msg', 'Invalid email or password...');
            return redirect('/login');
        }
     
      }
 
}
