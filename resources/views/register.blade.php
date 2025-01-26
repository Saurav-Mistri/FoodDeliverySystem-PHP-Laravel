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

<!-- start nav bar -->

<!-- end nav bar -->

<div class="container">

<hr>
<div class="card bg-light">

<article class="card-body mx-auto" style="max-width: 400px;">
    <center> <h3> REGISTER </h3></center>
  <p class="text-center"> Get started with your account </p><br>
  
  <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

  <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Full name" type="text">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
     </div>
        <input name="u_img" class="@error('u_img') is-invalid @enderror" placeholder="Select Image" type="file">
        @error('u_img')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-thumb-tack"></i> </span>
     </div>
        <input name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address" type="text">
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
    <span class="input-group-text"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
</svg></span>
     </div>
        <div class="col col-md-9">
            <div class="form-check-inline form-check">
                <label for="inline-radio1" class="form-check-label ">&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="inline-radio1" name="gender" value="male" class="form-check-input">Male
                </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="inline-radio2" class="form-check-label ">
                    <input type="radio" id="inline-radio2" name="gender" value="female" class="form-check-input">Female
                </label>
            </div>
        </div>
    </div>


    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
     </div>
        <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" type="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->


    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
    </div>
    <select class="custom-select @error('phn_no') is-invalid @enderror" style="max-width: 120px;">
        <option selected="1">+91</option>
        <option value="2">+972</option>
        <option value="3">+198</option>
        <option value="4">+701</option>
            <option value="5">+971</option>
    </select>
      <input name="phn_no" class="form-control @error('phn_no') is-invalid @enderror" placeholder="Phone number" type="text">
      @error('phn_no')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div> <!-- form-group// -->


    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Create password" type="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->


    <div class="form-group input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
    </div>
        <input name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Repeat password" type="Password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div> <!-- form-group// -->


    <div class="form-group">
    <button type="submit" class="btn btn-primary btn-block py1" ><a href="login"><p style="color:white"> Create Account</p></a> </button>
    </div> <!-- form-group// -->


    <p class="text-center">Have an account? <a href="/login">Log In</a> </p>

</form>
</article>
</div> <!-- card.// -->
<br><br><br>
</div>
<br><br><br><br>
</div>
<!--container end.//-->

      <!-- start footer Area -->
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
input[type=text],[type=email],[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  font-family: Arial, Helvetica, sans-serif;
  font-size:17px;
}
</style>

    <h1 class="text-center">Add Data</h1><br>
    <div class="card card-default">
        <div class="card-header">
            <div class="card-body">
                <br>
                @include('formerror')
                <form action="{{ url('register') }}" method="POST">
	                @csrf
	                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name.." required>
                    <br><br>
                    <label for="phn_no">Phone</label>
                    <input type="text" name="phn_no" id="phn_no" placeholder="Enter Mobile No.." required>
                    <br><br>
                    <label for="email">Email</label>
		                <input type="email" name="email" id="email" placeholder="Enter your email.." required>
                        <br><br>
                    <label for="password">Password</label>
		                <input type="password" name="password" id="password" placeholder="Enter your password.." required>
                    <br><br>
                    <label for="password_confirmation">Password</label>
		                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm your password.." required>
		                <input type="Submit" name="Submit" style="cursor:pointer" class="btn btn-primary">
                    <br><br>
                    <p class="text-center">Have an account? <a href="/login">Log In</a> </p>
	                </div>
                </form>
            </div>
        </div>
    </div>-->
@endsection