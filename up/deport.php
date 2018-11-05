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
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Deports
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
                  <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                  <tr>
                                      <th>Deport Name</th>
                                      <th>Address</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $getDeports = $db->getRows("SELECT * FROM deports");
                                  foreach ($getDeports as $key => $value) {
                                    echo "
                                    <tr class='success'>
                                        <td>".$value['name']."</td>
                                        <td>".$value['address']."</td>
                                        <td><a href='editDeport?id=".$value['id']."' class='btn btn-warning'>Edit <i class='fa  fa-edit'></i></a> | <a href='deleteDeport?id=".$value['id']."&deport=".$value['name']."' class='btn btn-warning'>Delete <i class='fa  fa-trash'></i></a></td>
                                    </tr>
                                    ";
                                  }
                                  ?>
                                </tbody>
                          </table>
                      </div>
                      <hr>
                        <h2>Create Deports here <i class="fa fa-arrow-down"></i></h2>
                        <?php
                             if (isset($_POST['name'], $_POST['deportAddress'])) {
                              $name = $_POST['name'];
                              $deportAddress = $_POST['deportAddress'];
                            
                              $insertRow = $db->insertRow("INSERT INTO deports(name, address) VALUES(?, ?)", [$name, $deportAddress]);
                            
                              if ($insertRow) {
                                echo "
                                  <div class='alert alert-success'>
                                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                  <strong>Successfully!</strong> Created
                                  </div>
                                ";
                              } else {
                                echo "
                                  <div class='alert alert-danger'>
                                  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                  <strong>Failed!</strong> Try again
                                  </div>
                                ";
                              }
                            }
                             ?>
                      <form   method="post" role="form" >
                		
                        <div class="form-group">
                          <label for="name">Deport Name</label>
                          <input type="text"  name="name" class="form-control" id="name" autocomplete="off">
                        </div>

                        <div class="form-group">
                          <label for="deport_address">Deport Address</label>
                          <input type="text"  name="deportAddress" class="form-control" id="deportAddress" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary" >Create Deport <i class="fa fa-plus"></i></button>
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
