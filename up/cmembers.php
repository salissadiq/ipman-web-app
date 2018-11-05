<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <h2>Manage Members <i class="fa fa-arrow-down"></i></h2>
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
    <hr>
                      <div id="feedback"></div>
                      <form  action="" method="post" role="form">
                        <?php
                            if (isset($_POST['submit'])) {
                              $name = $_POST['name'];
                              $address = $_POST['address'];
                              $director = $_POST['director'];
                              $phone = $_POST['phone'];

                              $insertCmember = $db->insertRow("INSERT INTO cMembers(name, address, director, phone) VALUES(?, ?, ?, ?)", [$name, $address, $director, $phone]);

                              if ($insertCmember) {
                                      echo "
                                          <div class='alert alert-success'>
                                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                        <strong>Successfully Added!</strong>
                                        </div>
                                          ";
                              }else {
                                 echo "
                                      <div class='alert alert-danger'>
                                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                    <strong>Failed To Add!</strong> Try again
                                    </div>
                                  ";
                              }
                            }

                          ?>
                        <div class="form-group">
                          <label for="content">Company Name</label>
                          <input type="text" name="name" class="form-control" id="content" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                          <label for="content">Company address</label>
                          <input type="text" class="form-control" name="address" placeholder="Company Address">
                        </div>
                          <div class="form-group">
                          <label for="content">Company Director</label>
                          <input type="text" class="form-control" name="director" placeholder="Company Direcctor">
                        </div>
                         <div class="form-group">
                          <label for="content">Company Phone</label>
                          <input type="text" class="form-control" name="phone" placeholder="Company Phone">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" >Add <i class="fa fa-plus"></i></button>
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
