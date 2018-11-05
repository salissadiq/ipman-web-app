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
                            Deports<small> Can be manage here <i class="fa fa-arrow-down"></i></small>
                        </h1>

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
                              $getDeport = $db->getRow("SELECT * FROM deports WHERE id = ?", [$id]);
                             ?>
                        <h2>Edit Deports here <i class="fa fa-arrow-down"></i></h2>
                        <div id="feedback"></div>
                      <form class="ajaxform" action="ajaxUpdateDeport.php" method="post" role="form" >
                        <div class="form-group">
                          <label for="name">Deport Name</label>
                          <input type="text" value="<?php echo $getDeport->name ?>"  name="name" class="form-control" id="name" autocomplete="off">
                        </div>
                        <input type="hidden" value="<?php echo  $getDeport->id ?>" name="id">
                        <div class="form-group">
                          <label for="deport_address">Deport Address</label>
                          <input type="text" value="<?php echo $getDeport->address ?>"  name="deportAddress" class="form-control" id="deportAddress" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary" > Update <i class="fa fa-edit"></i></button>
                      </form>

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
    <script src="js/ajaxforms.submit.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
