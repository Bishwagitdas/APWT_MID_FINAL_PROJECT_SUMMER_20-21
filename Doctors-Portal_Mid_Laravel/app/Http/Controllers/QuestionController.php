<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
     public function viewQuestion(){
        return view('doctor.question');
     }
 
}
