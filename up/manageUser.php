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
                            Users<small> Can be manage here <i class="fa fa-arrow-down"></i></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                  <div class="table-responsive">
                          <table class="table table-bordered table-hover table-striped">
                              <thead>
                                  <tr>
                                      <td align='center'>Userame</td>
                                      <td align='center'>Password</td>
                                      <td align='center'>Name</td>
                                      <td align='center'>Action</td>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php
                                  $getDeports = $db->getRows("SELECT * FROM users");
                                  foreach ($getDeports as $key => $value) {
                                    echo "
                                    <tr class='success'>
                                        <td align='center'>".$value['username']."</td>
                                        <td align='center'>".$value['password']."</td>
                                        <td align='center'>".$value['name']."</td>
                                        <td align='center'>";
                                        if ($value['status'] == 'a'){
                                          echo " <a href='edituserStatus.php?id=".$value['id']."' class='btn btn-warning'>Deactivate <i class='fa  fa-edit'></i></a>";
                                        } else {
                                          echo " | <a href='edituserStatus.php?id=".$value['id']."' class='btn btn-warning'>Activate <i class='fa  fa-edit'></i></a>";
                                        }
                                        echo " | <a href='editUser.php?id=".$value['id']."' class='btn btn-warning'>Edit <i class='fa  fa-edit'></i></a> |
                                        <a href='deleteUser.php?id=".$value['id']."' class='btn btn-warning'>Delete <i class='fa  fa-trash'></i></a></td>
                                    </tr>
                                    ";
                                  }
                                  ?>
                                </tbody>
                          </table>
                      </div>

                        <h2>Add User here <i class="fa fa-arrow-down"></i></h2>
                        <div id="feedback"></div>
                      <form class="ajaxform" action="ajaxmanageUser.php" method="post" role="form" >
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text"   name="username" class="form-control" id="username" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password"  name="password" class="form-control" id="password" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text"   name="name" class="form-control" id="name" autocomplete="off">
                        </div>
                        <button type="submit" class="btn btn-primary" >Create User <i class="fa fa-plus"></i></button>
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
