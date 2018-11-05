<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">
            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <h2>Add advert here <i class="fa fa-arrow-down"></i></h2>
                      <p>Advert can  be added here<i class="fa fa-arrow-down"></i></p>
                      <div id="feedback">
                        <?php
                        if (isset($_POST['submit'])) {
                          $headline = $_POST['headline'];
                          $body = $_POST['body'];
                          $ads_picture = $_FILES["fileToUpload"]["name"];
                          $target_dir = "advert/";
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
                            $insertads = $db->insertRow("INSERT INTO advert(headline, picture, body) VALUES(?, ?, ?)",
                            [$headline, $ads_picture, $body]);
                            if ($insertads) {
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
                      <form method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="content">Advert headline</label>
                          <input type="text"  name="headline" class="form-control" id="content">
                        </div>
                        <div class="form-group">
                          <label for="pic">Advert picture</label>
                          <input type="file"  name="fileToUpload" class="form-control" id="pic">
                        </div>
                        <div class="form-group">
                          <label for="content">Advert Body</label>
                          <textarea name="body" rows="5" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" >Update</button>
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
