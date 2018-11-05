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
    body{
      font-family: comic sans MS;
    }
      #deports{
        background-color:#efefef
      }
      .forum{
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
                                    <a href="./#">IPMAN</a>
                                  </h1>
                                </div> <!-- /.logo-wrapper -->
                                <div class="col-md-10 col-sm-10 main-menu text-right">
                                  <h1 class="abj">
                                      <a   href="./#">[Abuja-Suleja unit]</a>
                                  </h1>
                                    <div class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></div>
                                    <ul class="menu-first">
                                        <li ><a href="./#">Home <i class="fa fa-home"></i></a></li>
                                        <li ><a href="./#price">Profile <i class="fa fa-user"></i></a></li>
                                        <li><a href="logout">Sign out <i class="fa fa-sign-out"></i></a></li>
                                    </ul>
                                </div> <!-- /.main-menu -->
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->


<div class="content-section">
  <div class="container">
    <div class="row">
        <div class="heading-section col-md-12 text-center">
            <h2>Excos Forum</h2>
        </div> <!-- /.heading-section -->
    </div> <!-- /.row -->
    <div class="row">
      <div class="forum">
        <div class="panel panel-danger">

         <div class="panel panel-danger">
          <?php 
            $id = $_SESSION['exco'];
            $getMember = $db->getRow("SELECT * FROM excos WHERE id = ?", [$id]);
           ?>
          <div class="panel-body">
            <h1>Welcome <strong><?php echo $getMember->name ?></strong><br> Wanna say something? Feel free</h1>
            <?php
  require_once 'admin/functions.php';

  if (isset($_POST['submit'])) {

    $poster_id = $_POST['poster_id'];
    $post_content = $_POST['post_content'];
    $post_date = date("Y-m-d h:i:sa");

    $updatePost = $db->insertRow("INSERT INTO excos_post(poster_id, post_content, post_date) VALUES(?, ?, ?)", [$poster_id, $post_content, $post_date]);
    if ($updatePost) {
      echo "
        <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong> Your message was sent Successfully !</strong>
      </div>
        ";
    } else {
      echo "
        <div class='alert alert-danger'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Failed!</strong> To post please try again
      </div>
        ";
    }

  }
?>
            <form action="" method="post">
                    <div class="form-group">
                      <label for="">Message</label>
                      <textarea name="post_content" class="form-control" rows="6" placeholder="Your message" ></textarea>
                      <input type="hidden" value="<?php echo $id ?>" name="poster_id">
                    </div>
                    <button type="submit" class="btn btn-default">  Send</button>
                  </form>
                </div>
        </div>
          <?php  
          $getPost = $db->getRows("SELECT excos.id, excos.name, excos_post.post_content, post_date FROM excos, excos_post WHERE excos.id = poster_id ");

          foreach ($getPost as $key => $value) {
            echo "
           <div class='panel panel-info'>
          <div class='panel-heading'> <h4>Posted By <strong> ".$value['name'] ."</strong> </h4> </div>
          <div class='panel-body'>". $value['post_content'] ."</div>

          <div class='panel-footer'>
          <p>Posted  On: ". $value['post_date'] ."</p>
          <p></p>
          <p> Comment:</p>
          <p>OK good</p>
            <form class='' action='index.html' method='post'>
              <div class='form-group'>
              <textarea name='name' rows='3' class='form-control' placeholder='Comment........'></textarea>
              </div>
            </form>
           </div>
        </div>
            ";
          }
        ?>

      </div>
    </div>

  </div>
</div>
<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
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
