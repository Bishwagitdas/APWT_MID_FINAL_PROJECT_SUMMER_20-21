<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
     public function viewProfile(Request $req){
      // $username = $req->session()->get('username');
      
       
      $id =  $req->session()->get('id');
      // $doctor =Doctor::find($id);
      // $username = $doctor -> username;
      // return view('doctor.profile',compact(['doctor'],'username'));
           
      //   return view('doctor.profile');
      
      $user = DB::table('doctor')
      ->where('id', $id)
      ->first();
      
      // $username = $doctor -> username;
      // $user = User::find($id);
      $uname = $user -> username;
      // print_r($uname);
     
      return view('doctor.profile',compact(['user']));
     }

     public function upProfile(Request $req){
      $id = $req->session()->get('id');
      // dd($req->all());
      $value = DB::table('doctor')
      ->where('id', $id)
      ->update( [
         'username' => $req->username,'email' => $req->email,'password' => $req->password,'title' => $req->title,
         'chamber' => $req->chamber,'department' => $req->department,'address' => $req->address,
         'city' => $req->city,'country' => $req->country,
          ] );;
    
      $req->session()->flash('success', 'update successfully...');
      return redirect('/profile');
      
      
  }

   
 
}
