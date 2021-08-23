<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
// use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
     public function viewBlog(Request $req){


      $blogs = blogs::all();
        // redirect()->route('/protfolio')->with('user',$user);
         return view('doctor.blogs')->with('blogs',$blogs);

     }
 
}
