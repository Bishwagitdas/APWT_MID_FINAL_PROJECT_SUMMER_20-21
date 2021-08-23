
@extends('master')

@section('title')
<title>Doctor CreateBlog</title>
@endsection

@section('mycss')
<style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);
  
  body { background:rgb(52, 73, 94); }
  form { max-width:420px; margin:50px auto; }
  
  .feedback-input {
    color:white;
    font-family: Helvetica, Arial, sans-serif;
    font-weight:500;
    font-size: 18px;
    border-radius: 5px;
    line-height: 22px;
    background-color: transparent;
    border:2px solid #CC6666;
    transition: all 0.3s;
    padding: 13px;
    margin-bottom: 15px;
    width:100%;
    box-sizing: border-box;
    outline:0;
  }
  
  .feedback-input:focus { border:2px solid #CC4949; }
  
  textarea {
    height: 150px;
    line-height: 150%;
    resize:vertical;
  }
  
  [type="submit"] {
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    width: 100%;
    background:#CC6666;
    border-radius:5px;
    border:0;
    cursor:pointer;
    color:white;
    font-size:24px;
    padding-top:10px;
    padding-bottom:10px;
    transition: all 0.3s;
    margin-top:-4px;
    font-weight:700;
  }
  [type="submit"]:hover { background:#CC4949; }
  
  </style> 
@endsection
@section('mycontent')
<form action="/blogcreate" method="post" class="blogcreate-form">
   @csrf
   @if(session()->has('success'))
  {{session('success')}}<br>
   @endif
   
  <span  style="color:red;">{{ session('msg') }}
   @foreach($errors->all() as $err)
   {{$err}} <br>
  @endforeach 
  </span> <br/><br/><br/>     
  <input name="title" type="text" class="feedback-input" placeholder="Blog Title" />   
  <textarea name="description" type="text" class="feedback-input" placeholder="Description"></textarea>
  <button type="submit" name= "submit">Post</button>
</form> 
@endsection
