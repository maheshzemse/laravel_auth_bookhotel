@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Gallary</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container-fluid">
 	<h1 class="text-center  text-info" > Hotel Photos </h1>
 

<div class="row mt-3 ml-5 ">
<div class="col-lg-6 col-md-6 col-12">
<div class="card" style="width: 18rem;">
  <a href="mumbai"><img class="card-img-top" src="2.jpg" alt="Card image cap"></a>
  <div style="background-color: #D5F5E3" class="card-body">
    <p class="card-text  text-center">Mumbai SkyLine.</p>
  </div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-12 ">
<div class="card" style="width: 18rem;">
  <a href="goa"><img class="card-img-top" src="3.jpg" alt="Card image cap"></a>
  <div style="background-color: #D5F5E3" class="card-body">
    <p class="card-text  text-center">Goa SkyLine.</p>
  </div>
</div>
</div>


<div class="col-lg-6 col-md-6 col-12 mt-3 ">
<div class="card" style="width: 18rem;">
  <a href="bangalore"><img class="card-img-top" src="pic6.jpg" alt="Card image cap"></a>
  <div style="background-color: #D5F5E3" class="card-body">
    <p class="card-text  text-center">Bangalore SkyLine.</p>
  </div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-12 mt-3">
<div class="card" style="width: 18rem;">
  <a href="rajasthan"><img class="card-img-top" src="pic3.jpg" alt="Card image cap"></a>
  <div style="background-color: #D5F5E3" class="card-body">
    <p class="card-text  text-center">Rajasthan SkyLine.</p>
  </div>
</div>
</div>


</div>
















</body>
</html>

@endsection