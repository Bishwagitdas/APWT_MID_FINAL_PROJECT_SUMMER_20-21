@extends('master')

@section('title')
<title>Doctor Blog</title>
@endsection

   
 @section('mycontent')
  
 <div class="container">
  <div class="row">
    <div class="col-md-6">
      <a href="/blogcreate" class="btn btn-primary">create new blog</a>
      <a href="/blogview" class="btn btn-primary">View My blog</a>
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
 
 <!-- <div class="container">
  <div class="row">
    <div class="col-md-6">
       <button type="button" class="btn btn-primary">Add New Blog</button>
      <button type="button" class="btn btn-primary">View All Blog</button> -->
      <!-- <a href="/blogcreate" class="btn btn-primary">create new blog</a>
      <a href="/blogview" class="btn btn-primary">View My blog</a>
    </div>
  </div>
</div>
 <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> -->
        <!-- <img class="card-img-top" src="index.jpg" alt="Card image cap"> -->
        <!-- <div class="card-body">
          <h5 class="card-title">This is Our Blog 1</h5>
          <p class="card-text">Some quick example text Some quick example textSome quick example textSome quick example textto build on the card title and make up the bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Read More</a> -->
          <!-- <a href="blog.php" class="btn btn-primary">hide</a> -->
        <!-- </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> -->
        <!-- <img class="card-img-top" src="index.jpg" alt="Card image cap"> -->
        <!-- <div class="card-body">
          <h5 class="card-title">This is Our Blog 2</h5>
          <p class="card-text">Some quick example text Some quick example textSome quick example textSome quick example
            textto build on the card title and make up the bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Read More</a> -->
          <!-- <a href="blog.php" class="btn btn-primary">hide</a> -->
        <!-- </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> -->
        <!-- <img class="card-img-top" src="index.jpg" alt="Card image cap"> -->
        <!-- <div class="card-body">
          <h5 class="card-title">This is Our Blog 3</h5>
          <p class="card-text">Some quick example text Some quick example textSome quick example textSome quick example
            textto build on the card title and make up the bulk of the card's content.
          </p>
          <a href="blog.php" class="btn btn-primary">Read More</a> -->
          <!-- <a href="blog.php" class="btn btn-primary">hide</a> -->
        <!-- </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> -->
        <!-- <img class="card-img-top" src="index.jpg" alt="Card image cap"> -->
        <!-- <div class="card-body">
          <h5 class="card-title">This is Our Blog 4</h5>
          <p class="card-text">Some quick example text Some quick example textSome quick example textSome quick example
            textto build on the card title and make up the bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Read More</a> -->
          <!-- <a href="#" class="btn btn-primary">hide</a> -->
        <!-- </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;"> -->
        <!-- <img class="card-img-top" src="index.jpg" alt="Card image cap"> -->
        <!-- <div class="card-body">
          <h5 class="card-title">This is Our Blog 5</h5>
          <p class="card-text">Some quick example text Some quick example textSome quick example textSome quick example
            textto build on the card title and make up the bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Read More</a> -->
          <!-- <a href="blog.php" class="btn btn-primary">hide</a> -->
        <!-- </div>
      </div>
    </div>
  </div>
</div>  -->
 @endsection
 
 
 
   

  @section('myjsfiles')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
      
  @endsection