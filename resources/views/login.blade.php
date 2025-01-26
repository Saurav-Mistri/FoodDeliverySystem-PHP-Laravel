@extends('master')
@section('content')
<div class="card bg-dark">
<br><br><br><br><br><br><br><br><br>
<style>
      .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
  </style>


  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<!--- nav bar -->

  <!-- end nav bar -->

<div class="container">

<hr>
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
<br><br>
    <center> <h3> LOGIN </h3></center>
    @include('formerror')
  <form action="{{route('login')}}" method="POST">
<br>        
   <!-- form-group// -->
     @csrf
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control" placeholder="Enter your email address" type="email" required>
    </div> <!-- form-group// -->
     <!-- form-group// -->
<br>
    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="password" class="form-control" placeholder="Enter your password" type="password" required>
    </div> <!-- form-group// -->
<br>    
<p class="text-right"><a href="/forget">Forget Password</a> </p>
     <!-- form-group// -->
    <div class="form-group input-group">
        <button type="submit" class="btn btn-primary btn-block py1"><p style="color:white; cursor:pointer">Login</p></button>
    </div> <!-- form-group// -->
    <p class="text-center">Do not have an account? <a href="/register">Register</a> </p>

</form>
<br><br>
</article>
</div> <!-- card.// -->
</div>
<br><br><br><br>
@endsection