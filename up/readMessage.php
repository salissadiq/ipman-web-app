<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Messages Overview <i class="fa fa-envelope"></i></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-envelope"></i> Messages
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                  <?php
                  $id = $_GET['id'];
                  $updateMessageStatus = $db->updateRow("UPDATE contact_message SET status = ? WHERE id = ?", ["b", $id]);
                  $getmessage = $db->getRow("SELECT * FROM contact_message WHERE id = ?", [$id]);
                  ?>
                      <div class='col-lg-12 col-md-6'>
                          <div class='panel panel-info'>
                              <div class='panel-heading'>
                                  <div class='row'>
                                      <div class='col-xs-3'>
                                          <i class='fa fa-envelope fa-2x'></i>
                                      </div>
                                      <div class='col-xs-9 text-left'>
                                      </div>
                                  </div>
                              </div>
                              <div class="panel-body">
                                <h4>Message By: <?php echo $getmessage->name?></h4>
                                <h6><?php echo $getmessage->message ?></h6>
                                <h5>Email: <?php echo $getmessage->email ?></h5>
                              </div>
                              <a href="home.php">
                                  <div class='panel-footer'>
                                      <span class='pull-left'><i class='fa fa-arrow-circle-left'></i> </span>
                                      <span class='pull-left'> Back To inbox</span>
                                      <div class='clearfix'></div>
                                  </div>
                              </a>
                          </div>
                      </div>
                </div>
                <!-- /.row -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
