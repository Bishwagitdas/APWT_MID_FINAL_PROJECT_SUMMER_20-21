<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blogs;
use Illuminate\Support\Facades\DB;

class BlogviewController extends Controller
{
     public function viewBlogview(Request $req){

      $d_id=$req->session()->get('id');
      $blogs = Blogs::where('doctor_id',$d_id)->get();
      return view('doctor.blogview')->with('blogs',$blogs);
      // $getemail = $req->session()->get('email');
      // $blogs = Blogs:: where('email','$getemail')->get('description');
      // return dd($d_id);
      //   return view('doctor.blogview');
      //  dd($blogs);
      // print_r($blogs);
      
     }

 
}
