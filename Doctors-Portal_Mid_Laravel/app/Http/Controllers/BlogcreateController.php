<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogcreateController extends Controller
{
     public function blogcreate(){
      return view('doctor.blogcreate');
     }
     public function store(Request $req){

          $validation = Validator::make($req->all(), [
             'title' => 'required|min:7|max:500',
             'description' => 'required|min:50|max:10000',
            
         ]);
         if($validation->fails()){
             return Back()->with('errors', $validation->errors())->withInput();            
         }
            
         if($req->title == "" || $req->description== ""){
            // $req->session()->flash('msg', 'null title or description...');
            return redirect('/blogcreate')->with('msg', 'invalid request...login first!');
         
         }else{
          
            $d_id=$req->session()->get('id');
             
             $blogs = new blogs;
            
             $blogs->title = $req->title;
             $blogs->description= $req->description;
             $blogs->doctor_id=$d_id;
             $blogs->status="active";
             $blogs->save();
             $req->session()->flash('success', 'Blog post successfully...');
             return redirect('/blogcreate');
           
             
    
             
    
    
    
         }
          
          
       }
 
}
