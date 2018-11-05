<?php
require_once 'admin/functions.php';
if (isset($_POST['code'])) {

  $code = $_POST['code'];
  if (!empty($code)) {
      $codes = $db->getRow("SELECT * FROM codes WHERE code = ?", [$code]);

      if ($codes) {
        $_SESSION['code'] = $codes->id;
        echo "
        <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Success!</strong> Please wait.....
      </div>
      <div><meta HTTP-EQUIV='Refresh' CONTENT='2; URL=promo'></div>
        ";
      } else {
        echo "
        <div class='alert alert-danger'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Failed!</strong> Invalid Codes!
      </div>
        ";
      }
    }
} 
?>
