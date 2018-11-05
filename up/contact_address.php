<?php
require_once 'DB.php';
require_once 'functions.php';
$db = new DB();
if (isset($_POST['phone'], $_POST['email'], $_POST['address'])) {

  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $updateRow = $db->updateRow("UPDATE contact_info SET phone = ?, email = ?, address = ? WHERE id = ?", [$phone, $email, $address, "2"]);

  if ($updateRow) {
    echo "
    <div class='alert alert-success'>
  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Successfully!</strong> Updated.
</div>
    ";
} else {
  echo "
  <div class='alert alert-danger'>
<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
<strong>Failed!</strong>To Update!!.
</div>
  ";
}
}
 ?>
