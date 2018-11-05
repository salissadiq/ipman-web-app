<?php
require_once 'functions.php';

    if (isset($_POST['deport'], $_POST['product'], $_POST['price'])) {

      $deport = $_POST['deport'];
      $product = $_POST['product'];
      $price = $_POST['price'];
      $update_date = date("Y/m/d");
      $current_dateTime = date("Y-m-d h:i:sa");

      $getRowCount = $db->getRowCount("SELECT * FROM price WHERE deport = ? AND product = ?", [$deport, $product]);
      $getadress = $db->getrow("SELECT * FROM deports WHERE name = ?", [$deport]);
      $adress = $getadress->address;
      if($getRowCount) {
        $updatePrice = $db->updateRow("UPDATE price SET address = ?, price= ?, update_date = ? WHERE deport = ?", [$adress, $price, $update_date, $deport]);
        $update_price_record = $db->insertRow("INSERT INTO price_record(deport, address, product, price, update_date) VALUES(?, ?, ?, ?, ?)", [$deport, $adress, $product, $price, $current_dateTime]);
        if ($updatePrice && $update_price_record) {
          echo "
            <div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Successfully!</strong> Updated
            </div>
          ";
        } else {
          echo "
          <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Failed!</strong> To update
      </div
          ";
        }
      } else {
        $insertPrice = $db->insertRow("INSERT INTO price(deport, address, product, price, update_date) VALUES(?, ?, ?, ?, ?)", [$deport, $adress, $product, $price, $update_date]);
        $update_price_record = $db->insertRow("INSERT INTO price_record(deport, address, product, price, update_date) VALUES(?, ?, ?, ?, ?)", [$deport, $adress, $product, $price, $current_dateTime]);

        if ($insertPrice && $update_price_record) {
          echo "
            <div class='alert alert-success'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Successfully!</strong> Inserted
            </div>
          ";
        } else {
          echo "
            <div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Failed!</strong> To update
            </div>
          ";
        }
      }

    }
