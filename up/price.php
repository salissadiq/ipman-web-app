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

                      <h2>Update Price <i class="fa fa-arrow-down"></i></h2>
  <p>Enter the product price, Select product then Select unit to update price</p>
  <div id="feedback"></div>
  <form class="ajaxform" role="form" method="post" action="ajaxprice.php">
    <div class="form-group">
      <label for="deport_id">Select Unit to update price:</label>
      <select name="deport" class="form-control" id="deport_id">
        <?php
          $getRows = $db->getRows("SELECT * FROM deports ");
          ?>
          	<?php
          foreach ($getRows as $rows => $value) {
            $deport_id = $value['id'];
            $deport_name = $value['name'];

          	echo "<option id='deportId'>" . $deport_name ."</option>";
          };

          ?>
      </select>
    </div>
    <div class="form-group">
  <label for="product_id">Select Product:</label>
  <select name="product" class="form-control" id="product_id">
    <?php
      $getRows = $db->getRows("SELECT * FROM product ");
      ?>
        <?php
      foreach ($getRows as $rows => $value) {
        $product_id = $value['id'];
        $product_name = $value['name'];

        echo "<option id='productId'>" . $product_name ."</option>";
      };

      ?>
  </select>
</div>
<div class="form-group">
  <label for="price">price:</label>
  <input type="text" name="price" class="form-control" id="price" placeholder="Enter price">
</div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
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
