<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@yield('title')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<style>

    body { background:rgb(30,30,40); }
  

    .bs-example{
        margin: 20px;        
    }


    
</style>


@yield('mycss')


</head>
<body>

   @include('Layout.navbar')

   @yield('mycontent')

    @yield('myjsfiles')  
</body>
</html>