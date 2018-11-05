<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <h2>Update Company Activity <i class="fa fa-arrow-down"></i></h2>
                      <p>Company activities can be update here <i class="fa fa-arrow-down"></i></p>
                      <div id="feedback"></div>
                      <form class="ajaxform" action="ajaxcompanyActivities.php" method="post" role="form">
                        <div class="form-group">
                          <label for="content">activity Headline</label>
                          <input type="text" name="headline" class="form-control" id="content">
                        </div>
                        <div class="form-group">
                          <label for="content">activity Body</label>
                          <textarea name="body" rows="8" class="form-control"></textarea>
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
