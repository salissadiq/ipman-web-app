<?php require_once 'head.php' ?>
<style>
  img{
    height: 200;
  }
</style>
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
                            Company team members<small> Can be manage here</small>
                        </h1>
                        <div id="feedback">
                          <?php
                            require_once 'functions.php';

                            if (isset($_POST['submit'])) {
                              $name = $_POST['name'];
                              $role = $_POST['role'];
                              $facebook = $_POST['facebook'];
                              $twitter = $_POST['twitter'];
                              $linkedin = $_POST['linkedin'];
                              $member_picture = $_FILES["fileToUpload"]["name"];
                              $target_dir = "team/";
                              $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                              $uploadOk = 1;
                              $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                              //$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                              && $imageFileType != "gif") {
                                echo"<h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1>";
                                  $uploadOk = 0;
                              } else {
                                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                                $insertMember = $db->insertRow("INSERT INTO team(name, member_picture, role, facebook, twitter, linkedin) VALUES(?, ?, ?, ?, ?, ?)",
                                [$name, $member_picture, $role, $facebook, $twitter, $linkedin]);
                                if ($insertMember) {
                                  echo "
                                  <div class='alert alert-success'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>Successfully!</strong> Added.
                              </div>
                                  ";
                                } else {
                                  echo "
                                  <div class='alert alert-danger'>
                                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                                <strong>failed!</strong> to Add.
                              </div>
                                  ";
                                }
                              }
                            }
                         ?>
                       </div>
                        <form   action="" method="POST" role="form" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="name">member name</label>
                            <input type="text"  name="name" class="form-control" id="name" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="name">Members picture</label>
                            <input type="file"  name="fileToUpload" class="form-control" id="name" required>
                          </div>
                          <div class="form-group">
                            <label for="role">member Role</label>
                            <input type="text"  name="role" class="form-control" id="role" autocomplete="off" required>
                          </div>
                          <div class="form-group">
                            <label for="facebook"><i class="fa fa-facebook"></i>acebook Link</label>
                            <input type="text"  name="facebook" class="form-control" id="facebook" autocomplete="off" >
                          </div>
                          <div class="form-group">
                            <label for="twitter">Twitter <i class="fa fa-twitter"></i> Link</label>
                            <input type="text"  name="twitter" class="form-control" id="twitter" autocomplete="off">
                          </div>
                          <div class="form-group">
                            <label for="linked">Linked<i class="fa fa-linkedin"></i>  Link</label>
                            <input type="text"  name="linkedin" class="form-control" id="linkedin" autocomplete="off">
                          </div>
                          <input type="submit" class="btn btn-info" name="submit" value="Add member">
                        </form>
                        <br>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Team
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
                  $teams = $db->getRows("SELECT * FROM team");
                    foreach ($teams as $key => $value) {
                      echo "
                      <div class='clo-sm-6 col-md-3'>
                          <div class='thumbnail'>
                          <img class='' src='team/".$value['member_picture']."' height='200'>
                              <div class='caption text-center'>
                                <h4>".$value['name']."</h4>
                                  <h4>".$value['role']."</h4>
                                  <a href='deleteMember?id=".$value['id']."' class='btn btn-danger'>Delete</a>
                                  <p></p>
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
    <script src="js/ajaxforms.submit.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
