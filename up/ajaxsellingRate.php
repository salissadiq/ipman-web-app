<?php
require_once 'functions.php';
if (isset($_POST['product'], $_POST['volume'], $_POST['beneficiary'])) {
  $product = $_POST['product'];
  $volume = $_POST['volume'];
  $beneficiary = $_POST['beneficiary'];
  $getRow = $db->getRowCount("SELECT * FROM selling_rate WHERE name = ?", [$product]);
  if ($getRow) {
    $updateRow = $db->updateRow("UPDATE selling_rate SET percentage = ? WHERE name = ?", [$percentage, $product]);
    if ($updateRow) {
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
        <strong>Failed!</strong> To Updated
        </div>
      ";
    }
  } else {
    $insertRow = $db->insertRow("INSERT INTO selling_rate(name, percentage) VALUES(?, ?)", [$product, $percentage]);
    if ($insertRow) {
      echo "
        <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Successfully!</strong> Added
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
}
 ?>
