<?php

namespace App\Http\Controllers;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class QuestiondetailsController extends Controller
{
     public function viewQuestiondetails(){
        return view('doctor.questiondetails');
     }

     public function store(Request $req){

      $validation = Validator::make($req->all(), [
         'comment' => 'required',
        
     ]);
     if($validation->fails()){
         return Back()->with('errors', $validation->errors())->withInput();            
     }
        
     if($req->comment == ""){
        // $req->session()->flash('msg', 'null title or description...');
        return redirect('/questiondetails')->with('msg', 'comment successfully posted...');
     
     }else{
      
   
         
         $comments = new comments;

         $comments->comment = $req->comment;
         $comments->status="active";
         $comments->save();
         $req->session()->flash('success', 'comment post successfully...');
         return redirect('/questiondetails');



     }
      
      
   }

 
}
