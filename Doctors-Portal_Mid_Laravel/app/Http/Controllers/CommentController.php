<?php

namespace App\Http\Controllers;
use App\Models\Report_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
     public function viewComment(){
      return view('doctor.commentcreate');
     }

     public function store(Request $req){

          $validation = Validator::make($req->all(), [
             'report_comment' => 'required',
            
         ]);
         if($validation->fails()){
             return Back()->with('errors', $validation->errors())->withInput();            
         }
            
         if($req->report_comment == ""){
            // $req->session()->flash('msg', 'null title or description...');
            return redirect('/commentcreate')->with('msg', 'null title or description...');
         
         }else{
          
       
             
             $report_comment = new report_comment;
    
             $report_comment->report_comment = $req->report_comment;
             $report_comment->status="active";
             $report_comment->save();
             $req->session()->flash('success', 'report comment send successfully...');
             return redirect('/commentcreate');
    
    
         }
          
          
       }
 
}
