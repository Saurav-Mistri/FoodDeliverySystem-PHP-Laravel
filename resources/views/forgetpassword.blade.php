<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forgot Password</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    </head>

<body>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session::has('status'))
        <div class="alert alert-success float-right" style="margin-left:200px; position:fixed; z-index:1; margin-top:60px; margin-left:76%">
        <span class="glyphicon glyphicon-ok"></span>
        <em> {{ Session::get('status') }}</em>
        </div>
    @endif
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <img class="logo-img" src="img/logo/logo.png" height="100" width="100" alt="">
                <span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="{{url('/sendOtp')}}" method="post">
                    {{csrf_field()}}
                    {{ method_field('put') }}
                     @if(Session::has('message'))       
                                    <div class="alert alert-info">        
                                        {{Session::get('message')}}
                                    </div>     
                                @endif
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="col-md-5 form-group p_star">
                                        <input type="email" class="form-control" id="userName" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="submit" name="userLoginBtn" value="Send Email" class="btn">
                                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="pages-sign-up.html">Sign Up</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/influence/landingpage/influence/pages/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 10:24:02 GMT -->
</html>