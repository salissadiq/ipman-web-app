<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->

            <!-- Brand and toggle get grouped for better mobile display -->
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
                  $getPetrol = $db->getRows("SELECT * FROM contact_message ORDER BY id DESC ");
                    foreach ($getPetrol as $key => $value) {
                      echo "
                      <div class='col-lg-12 col-md-6'>
                          <div class='panel panel-primary'>
                              <div class='panel-heading'>
                                  <div class='row'>
                                      <div class='col-xs-3'>";
                                      if ($value['status'] == "a") {
                                        echo "<span class='label label-info'>New</span>";
                                      }
                                        echo " <div class='huge'><i class='fa fa-envelope fa-3x'></i> " . $value['subject']  ."</div>
                                        <span class='pull-left'><a class='btn btn-danger btn-sm' href='deleteMessage.php?id=".$value['id']."'>Delete <i class='fa fa-trash'></a></i></span>
                                      </div>
                                      <div class='col-xs-9 text-left'>
                                      </div>
                                  </div>
                              </div>
                              <a href='readMessage.php?id=".$value['id']."'>
                                  <div class='panel-footer'>
                                      <span class='pull-left'><i class='fa fa-clock-o'></i> ".$value['message_date'] ." Read Message</span>
                                      </a>
                                      <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>

                                      <div class='clearfix'></div>
                                  </div>


                          </div>
                      </div>
                      ";
                    }
                  ?>
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
