@extends('master')

@section('title')
<title>Doctor ViewBlog</title>
@endsection
@section('myjsfiles')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
@endsection


@section('mycontent')
<div class="container">
  <div class="row">
    <div class="col-md-6">
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
  @foreach($blogs as $blogs)
    <div class="padding" style="padding: 10px">
    <div class="card" style="width: 18rem;" >
  <img  class="card-img-top" src="" height="150px" width="30px;" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$blogs->title}}</h5>
    <p class="card-text">{{$blogs->description}}</p>
    <a class="btn btn-primary" href="">Details</a>
  </div>
</div>
</div>
@endforeach
@endsection

  

