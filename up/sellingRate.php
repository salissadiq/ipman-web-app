<?php require_once 'head.php' ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once 'navbar.php' ?>
        <div id="page-wrapper">

            <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <h2>Product Selling rate <i class="fa fa-arrow-down"></i></h2>
                    <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Volume received</th>
                                        <th>Beneficiary</th>
                                    </tr>
                                </thead>
                                <tbody>

                                  </tbody>
                            </table>
                        </div>
                      <p>Product selling Rate can be manage here <i class="fa fa-arrow-down"></i></p>
                      <div id="feedback"></div>
                      <form class="ajaxform" action="ajaxsellingRate.php" method="post" role="form">
                        <div class="form-group">
                          <label for="content">Product</label>
                          <select name="product" id="product" class="form-control">
                            <?php $getProduct = $db->getRows("SELECT * FROM product");
                            foreach ($getProduct as $key => $value) {
                              echo "<option>".$value['name']."</option>";
                            }
                            ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="content">Volume received</label>
                          <input type="text" max="100" name="volume" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="bnf">Beneficiary</label>
                          <input type="text" max="100" name="beneficiary" id="bnf" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary" >Add</button>
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
