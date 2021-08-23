<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function viewIndex(){
        return view('doctor.index');
     }

   //   public function viewProfile(){
   //      return view('home.profile');
   //   }
 
}
