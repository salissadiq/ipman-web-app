<?php
require_once 'admin/functions.php';
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

<link href="admin/images/ipman.jpg" rel="icon" type="image/jpg" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin/css/font-awesome.css">
        <link rel="stylesheet" href="admin/css/animate.css">
        <link rel="stylesheet" href="admin/css/templatemo_misc.css">
        <link rel="stylesheet" href="admin/css/templatemo_style.css">
        <link rel="stylesheet" href="admin/css/signin.css">


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
                                        <li><a href="./">Home <i class="fa fa-home"></i></a></li>
                                        <li><a href="../#price">Price <i class="fa fa-arrow-up"></i>
                                           <i class="fa fa-money"></i> <i class="fa fa-arrow-down"></i></a></li>
                                        <li><a href="../#deports">Deports <i class="fa fa-truck"></i></a></li>
                                        <li><a href="../#our-team">Team <i class="fa fa-users"></i></a></li>
                                        <li><a href="../#contact">Contact <i class="fa fa-phone"></i></a></li>
                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div><br><br><br><br><br><br><br><br><br>

        <div class="container">

      <form class="ajaxform form-signin" action="ajaxgopromo.php" method="post" >

        <div id="feedback">
        </div>
        <div id="redirect"></div>
      <center>  <h2 class="signinHeader">PROMO <i class="fa fa-lock"></i></span></h2></center>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Promo Code</label>
        <input type="password" name="code" id="inputPassword" class="form-control" placeholder="Enter your promo code" required>
        </div>
        <button id="btnLogin" class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="admin/js/bootstrap.js"></script>
        <script src="admin/js/plugins.js"></script>
        <script src="admin/js/main.js"></script>
        <script src="admin/js/jquery.min.js"></script>
        <script src="admin/js/ajaxforms.submit.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <style>
        body{
            background-image: url(admin/images/lo.jpg);
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
