<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupController extends Controller
{
     public function signup(){
        return view('doctor.signup');
     }
     
   public function store(Request $req){

      $validation = Validator::make($req->all(), [
         'username' => 'required|min:3|max:20',
         'email' => 'required',
         'password' => 'required|min:3|max:10',
         'title' => 'required',
         'chamber' => 'required',
         'department' => 'required',
         'address' => 'required',
         'city' => 'required',
         'country' => 'required',
     ]);
     if($validation->fails()){
      //   return redirect()->route('home.create')->with('errors', $validation->errors());
         return Back()->with('errors', $validation->errors())->withInput();            
     }
        
     if($req->username == "" || $req->email == "" || $req->password == ""  || $req->title == "" || 
     $req->chamber == "" || $req->department == ""  || $req->address == "" || $req->city  == "" || $req->country == ""){
        $req->session()->flash('success', 'null username or password...');
        return redirect('/login');

     
     }else{
      $user = new User;

      $user->username = $req->username;
      $user->password =$req->password;
      $user->email = $req->email;
      $user->status = "active";
      $user->user_type = "doctor";
      $req->session()->flash('success', 'signup successfully...');
      $user->save();
      
   
         
      $doctor = new doctor;

      $doctor->username = $req->username;
      $doctor->email = $req->email;
      $doctor->password =$req->password;
      $doctor->title =$req->title;
      $doctor->chamber =$req->chamber;
      $doctor->department =$req->department;
      $doctor->address=$req->address;
      $doctor->city =$req->city;
      $doctor->country =$req->country;
      $doctor->status = "doctor";
      $doctor->save();
      return redirect('/login');
         
         

         



     }
      
      
   }
 
}
