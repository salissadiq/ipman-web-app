<?php require_once 'admin/functions.php'; ?>

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
        background-color:#efefef;
        margin-top: 0px;
      }
      #contact{
        background-color:#efefef;
      }
      .huge2{
        font-weight: 500px;
        font-size: 30px;
      }
      #advert{
        background-color:#efefef;
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
                                      <a   href="#">[Abuja Suleja-unit]</a>
                                  </h1>
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li class="active"><a href="#">Home </a></li>
                                        <li>
                                          <a href="#price">Price list
                                        </a></li>
                                        <li><a href="#deports">Depots </a></li>
                                        <li><a href="viewmembers">Members </a></li>
                                        <li><a href="#our-team">Team </a></li>
                                        <li><a href="#contact">Contact </a></li>

                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
            <div class="site-slider">
                <div class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="overlay"></div>
                                <img src="admin/images/slide1.jpg" alt="" height="700px">
                                <div class="slider-caption visible-md visible-lg">
                                    <h2>Independent Petroleum Marketers Association of Nigeria</h2>
                                    <p>Abuja - Suleja Unit</p>
                                    <a class="btn btn-warning" href="gopromo">Promo For IPMAN Suleja Marketers</a>
                                 
                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="admin/images/slide2.jpg" alt="" height="700px">
                                <div class="slider-caption visible-md visible-lg">
                                    <h2>Independent Petroleum Marketers Association of Nigeria</h2>
                                    <p>Abuja - Suleja Unit</p>
                                    <a class="btn btn-warning" href="gopromo">Promo For IPMAN Suleja Marketers</a>
                                 

                                </div>
                            </li>
                            <li>
                                <div class="overlay"></div>
                                <img src="admin/images/slide3.jpg" alt="" height="700px">
                                <div class="slider-caption visible-md visible-lg">
                                    <h2>Independent Petroleum Marketers Association of Nigeria</h2>
                                    <p>Abuja - Suleja Unit</p>
                                    <a class="btn btn-warning" href="gopromo">Promo For IPMAN Suleja Marketers</a>
                                     

                                </div>
                            </li>
                        </ul>
                    </div> <!-- /.flexslider -->
                </div> <!-- /.slider -->
            </div> <!-- /.site-slider -->
        </div> <!-- /.site-main -->

        <div class="content-section" id="advert">
          <div class="container">
            <div class="row">
              <?php $getAds = $db->getRow("SELECT * FROM advert")  ?>
              <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $getAds->headline ?></div>
                <div class="panel-body"><img src="admin/advert/<?php echo $getAds->picture; ?>" width="100%" height="300px"></div>
                <div class="panel-footer"><?php echo $getAds->body ?></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-section" id="price" >
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Product price list</h2>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                  <?php
                  $getPetrol = $db->getRows("SELECT name FROM product ");
                    foreach ($getPetrol as $key => $value) {
                      echo "
                      <div class='col-lg-2 col-md-6'>
                          <div class='panel panel-info'>
                              <div class='panel-heading'>
                                  <div class='row'>
                                      <div class='col-xs-3'>
                                          <i class='fa fa-money fa-4x'></i>
                                      </div>
                                      <div class='col-xs-9 text-right'>
                                          <div class='huge2'>" . $value['name'] . "</div>
                                          <div>Price as of today</div>
                                      </div>
                                  </div>
                              </div>
                              <a href='pricelist.php?product=".$value['name']."'>
                                  <div class='panel-footer'>
                                      <span class='pull-left'>Click to view price</span>
                                      <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                      <div class='clearfix'></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                      ";
                    }
                  ?>

                </div>
            </div> <!-- /.container -->
        </div> <!-- /#services --><br><br>


                          <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Depots</h2>
                        <p></p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
        <div class="content-section" id="deports">
            <div class="container">
                <div class="row">

                      <?php
                      $getDeport = $db->getRows("SELECT * FROM deports LIMIT 6");
                      foreach ($getDeport as $key => $value) {
                        echo "
                        <div class='portfolio-item col-md-2 col-sm-6'>
                          <div class='portfolio-thumb'>
                              <img src='admin/".$value['picture']."' height='250px' alt=''>
                              <div class='portfolio-overlay'>
                                  <h3>".$value['name']."</h3>
                                  <p>".$value['address']."</p>
                                  <a href='#' data-rel='lightbox' class='expand'>
                                      <i class='fa fa-search'></i>
                                  </a>
                              </div> <!-- /.portfolio-overlay -->
                          </div> <!-- /.portfolio-thumb -->
                      </div> <!-- /.portfolio-item -->
                        ";
                      }
                      ?>
                </div> <!-- /.row -->
                    <center> <a href="viewdepots" class="btn btn-danger">View all depots <i class="fa fa-arrow-right"></i></a>  </center><br>
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Members</h2>
                        <p></p>
                        <center> <a href="viewmembers" class="btn btn-info">Click here to view our members <i class="fa fa-arrow-right"></i></a>  </center><br>
                    </div>
            </div> <!-- /.container -->
        </div> <!-- /#portfolio -->




        <div class="content-section" id="our-team">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Our Team</h2>
                        <p>Our people are very united for your success</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
                <div class="row">
                  <?php
                  $teams = $db->getRows("SELECT * FROM team");
                  foreach ($teams as $key => $value) {
                    echo"
                    <div class='team-member col-md-3 col-sm-6'>
                        <div class='member-thumb'>
                            <img src='admin/team/".$value['member_picture']."' height='270px' alt='' >
                            <div class='team-overlay'>
                                <h3>".$value['name']."</h3>
                                <span>".$value['role']."</span>
                                <ul class='social'>
                                    <li><a href='".$value['facebook']."' class='fa fa-facebook'></a></li>
                                    <li><a href='".$value['twitter']."' class='fa fa-twitter'></a></li>
                                    <li><a href='".$value['linkedin']."' class='fa fa-linkedin'></a></li>
                                </ul>
                            </div> <!-- /.team-overlay -->
                        </div> <!-- /.member-thumb -->
                    </div> <!-- /.team-member -->
                    ";
                  }
                  ?>
                </div> <!-- /.row -->

            </div> <!-- /.container -->
        </div> <!-- /#our-team -->

        <div class="content-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="heading-section col-md-12 text-center">
                        <h2>Contact</h2>
                        <p>Send a message to us</p>
                    </div> <!-- /.heading-section -->
                </div> <!-- /.row -->
        
                <div class="row">
                    <div class="col-md-7 col-sm-6">
                      <?php $getActivities = $db->getRow("SELECT * FROM activities");
                      $contactAddress = $db->getRow("SELECT * FROM contact_info")
                       ?>
                      <h2><?php echo $getActivities->headline ?></h2>
                        <p>
                          <?php echo $getActivities->body ?>
                        </p>
                        <ul class="contact-info">
                            <li>Phone: <?php echo $contactAddress->phone; ?></li>
                            <li>Email: <a href="mailto:info@ipmansuleja.com"><?php echo $contactAddress->email ?></a></li>
                            <li>Address: <?php echo $contactAddress->address ?></li>
                        </ul>
                        <!-- spacing for mobile viewing --><br><br>
                    </div> <!-- /.col-md-7 -->
                    <div class="col-md-5 col-sm-6">
                        <div class="contact-form">
                          <div id="feedback"></div>
                            <form class="ajaxform" action="admin/ajaxcontactMesssage.php" method="post" name="contactform" id="contactform" autocomplete="off">
                                <p>
                                    <input name="name" type="text" id="name" placeholder="Your Name" autocomplete="off" required>
                                </p>
                                <p>
                                    <input name="email" type="text" id="email" placeholder="Your Email" autocomplete="off" required>
                                </p>
                                <p>
                                    <input name="subject" type="text" id="subject" placeholder="Subject" autocomplete="off" required>
                                </p>
                                <p>
                                    <textarea name="message" id="comments" placeholder="Message" required></textarea>
                                </p>
                                <input type="submit" class="mainBtn" id="submit" value="Send Message">
                            </form>
                        </div> <!-- /.contact-form -->
                    </div> <!-- /.col-md-5 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#contact -->

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12 text-left">
                      <?php $getCopyright = $db->getRow("SELECT * FROM copyright") ?>
                        <span>Copyright &copy; <?php echo date("Y") . '  ' . $getCopyright->content ?></span>
                  </div> <!-- /.text-center -->
                    <div class="col-md-4 hidden-xs text-right">
                        <a href="#top" id="go-top">Back to top</a>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#footer -->

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
