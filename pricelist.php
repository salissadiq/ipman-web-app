<?php
require_once 'admin/functions.php';
$product = $_GET['product'];

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
<!--
Flex Template
http://www.templatemo.com/tm-406-flex
-->
  <link href="admin/images/ipman.jpg" rel="icon" type="image/jpg" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="admin/css/bootstrap.min.css">
        <link rel="stylesheet" href="admin/css/font-awesome.css">
        <link rel="stylesheet" href="admin/css/animate.css">
        <link rel="stylesheet" href="admin/css/templatemo_misc.css">
        <link rel="stylesheet" href="admin/css/templatemo_style.css">
        <link href="admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="admin/css/plugins/morris.css" rel="stylesheet">
    <style>
      #deports{
        background-color:#efefef
      }
      #contact{
        background-color:#efefef
      }
      thead {
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 700px;
      }
    </style>
        <script src="admin/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body >
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
                                  <h1>
                                    <a href="#">IPMAN</a>
                                  </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                  <h1 class="abj">
                                      <a   href="#">[Abuja-Suleja unit]</a>
                                  </h1>
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="index">Home <i class="fa fa-home"></i></a></li>
                                        <li><a href="index#price">Price list <i class="fa fa-arrow-up">
                                            <i class="fa fa-money"></i>
                                        </i> <i class="fa fa-arrow-down"></i></a></li>
                                        <li><a href="index#deports">Depots <i class="fa fa-building"></i></a></li>
                                        <li><a href="index#our-team">Team <i class="fa fa-users"></i></a></li>
                                        <li><a href="index#contact">Contact <i class="fa fa-phone"></i></a></li>

                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <ul class="social-icons">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-dribbble"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>

                            </div> <!-- /.col-md-12 -->
                        </div> <!-- /.row -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main --><br><br><br><br><br><br>


<div class="content-section">
  <div class="container">
    <div class="row">
        <div class="heading-section col-md-12 text-center">
            <h2><?php echo $product ?> price list according to deport</h2>
        </div> <!-- /.heading-section -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <thead>
              <tr class="infor">
                <th >Deport name</th>
                <th>Address</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $getPrice = $db->getRows("SELECT * FROM price WHERE product = ?", [$product]);
                foreach ($getPrice as $key => $value) {
                  echo "
                  <tr>
                  <td>".$value['deport']."</td>
                  <td>".$value['address']."</td>
                  <td>NGN ".$value['price']."</td>
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
<script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
            <script src="admin/js/ajaxforms.submit.js"></script>

        <!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>

        <!-- Google Map Init-->
        <script type="text/javascript">
            jQuery(function($){
                $('#map_canvas').gmap3({
                    marker:{
                        address: '9.2722715,12.4583055'
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });

                /* Simulate hover on iPad
                 * http://stackoverflow.com/questions/2851663/how-do-i-simulate-a-hover-with-a-touch-in-touch-enabled-browsers
                 --------------------------------------------------------------------------------------------------------------*/
                $('body').bind('touchstart', function() {});
            });
        </script>
        <!-- templatemo 406 flex -->
    </body>
</html>
