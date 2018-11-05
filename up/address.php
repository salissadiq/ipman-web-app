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
                      <h2>Update Company contact details <i class="fa fa-arrow-down"></i></h2>
                        <p>Company contact address can be update here <i class="fa fa-arrow-down"></i></p>
                        <div id="feedback"></div>
                        <form class="ajaxform" action="contact_address.php" method="post" role="form">
                          <?php $getContactAddress = $db->getRow("SELECT * FROM contact_info") ?>
                          <div class="form-group">
                            <label for="usr">Company Phone:</label>
                            <input type="text" name="phone"  value="<?php echo $getContactAddress->phone ?>" class="form-control" id="phone">
                          </div>
                          <div class="form-group">
                            <label for="email">Company Email:</label>
                            <input type="email" value="<?php echo $getContactAddress->email ?>" name="email" class="form-control" id="email">
                          </div>
                          <div class="form-group">
                            <label for="address">Company Address</label>
                            <input type="text" value="<?php echo $getContactAddress->address ?>" name="address" class="form-control" id="address">
                          </div>
                          <button type="submit" class="btn btn-primary" >Update</button>
                        </form>
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
