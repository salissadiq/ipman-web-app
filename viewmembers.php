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
                                    <h1 class="abj">
                                      <a   href="#">[Abuja Suleja-unit]</a>
                                  </h1>
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li><a href="index">Home</a></li>
                                        <li><a href="index#price">Price </a></li>
                                        <li><a href="index#deports">Depots </a></li>
                                        <li><a href="viewmembers">Members </a></li>
                                        <li><a href="index#our-team">Team </a></li>
                                        <li><a href="index#contact">Contact </a></li>
                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div><br><br><br>

        <div class="content-section" >
  <div class="container">
    <div class="row">
        <div class="heading-section col-md-12 text-center">
            <h2>Our Members</h2>
        </div> <!-- /.heading-section -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr class="infor">
                <th>S/N</th>
                <th >Company name</th>
                <th>Address</th>
                <th>Direcctor</th>
                <th>Phone</th>
              </tr>
            </thead>
            <tbody>
                <?php  
                $getDepots = $db->getRows("SELECT * FROM cMembers");


                foreach ($getDepots as $key => $value) {
                    echo "
                    <tr>
                    <td>". $value['id'] ."</td>
                    <td>". $value['name'] ."</td>
                    <td>". $value['address'] ."</td>
                    <td>". $value['director'] ."</td>
                    <td>". $value['phone'] ."</td>
                    </tr>
                    ";
                }

                ?>
              
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

  <!-- /container -->


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
        <script src="admin/js/vendor/jquery.gmap3.min.js"></script>
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
