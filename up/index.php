<?php
require_once 'functions.php';

if (loggedIn()){
  header('location:home');
}
 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>IPMAN</title>
    	<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="images/ipman.jpg" rel="icon" type="image/jpg" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/signin.css">


        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->


        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <div class="logo-wrapper col-md-2 col-sm-2">
                                        <a href="#">IPMAN</a>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li><a href="../">Home <i class="fa fa-home"></i></a></li>
                                        <li><a href="../#price">Price <i class="fa fa-arrow-up"></i>
                                           <i class="fa fa-money"></i> <i class="fa fa-arrow-down"></i></a></li>
                                        <li><a href="../#deports">Depots <i class="fa fa-truck"></i></a></li>
                                        <li><a href="../#our-team">Team <i class="fa fa-users"></i></a></li>
                                        <li><a href="../#contact">Contact <i class="fa fa-phone"></i></a></li>
                                        <li class="active"><a href="#">Sign in <i class="fa fa-sign-in"></i></a></li>
                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div><br><br><br><br><br><br><br><br><br>

        <div class="container">

      <form class="ajaxform form-signin" action="login.php" method="post" >

        <div id="feedback">
        </div>
        <div id="redirect"></div>
        <h2 class="signinHeader">Admin sign in <i class="fa fa-lock"></i></span></h2>
        <div class="form-group">
        <label for="username" class="sr-only">Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" autocomplete="off" >
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
        </div>
        <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/ajaxforms.submit.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <style>
        body{
            background-image: url(images/lock.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .signinHeader{
            font-size: 30px;
            margin: 10px;
            color: #ec523f;
            text-transform: uppercase;
            color: #ec523f;
            font-size: 32px;
            font-weight: 700;
        }
    </style>
  </body>
</html>
