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
                    <div class="col-lg-12">

                    </div>
                </div>
                <!-- /.row -->
                      <div class="row">
                      </div>

                        <h2>Add User here <i class="fa fa-arrow-down"></i></h2>
                        <div id="feedback"></div>
                        <?php
                        $id = $_GET['id'];
                        $getUser = $db->getRow("SELECT * FROM users WHERE id = ?", [$id]);
                         ?>
                      <form class="ajaxform" action="ajaxeditUser.php" method="post" role="form" >
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" value="<?php echo $getUser->username ?>"   name="username" class="form-control" id="username" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" value="<?php echo $getUser->username ?>"  name="password" class="form-control" id="password" autocomplete="off">
                        </div>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" value="<?php echo $getUser->name ?>"   name="name" class="form-control" id="name" autocomplete="off">
                        </div>
                        <input type="hidden" value="<?php echo $getUser->id ?>" name="id">
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
