<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <h2>Update Company Copyright <i class="fa fa-arrow-down"></i></h2>
                      <p>Company copyright can be update here <i class="fa fa-arrow-down"></i></p>
                      <div id="feedback"></div>
                      <form class="ajaxform" action="update_copyright.php" method="post" role="form">
                        <div class="form-group">
                          <label for="content">Company Copyright</label>
                          <input type="text" value="<?php  ?>" name="content" class="form-control" id="content">
                        </div>
                        <button type="submit" class="btn btn-primary" >Update</button>
                      </form>
              <!-- /.row -->
              </div>
              <!-- /.row -->
          </div>
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
