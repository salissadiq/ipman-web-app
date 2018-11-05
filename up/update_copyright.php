<?php
require_once 'DB.php';
require_once 'functions.php';
$db = new DB();
if (isset($_POST['content'])) {

  $content = $_POST['content'];
  $copyright_date = date("Y");


  $updateRow = $db->updateRow("UPDATE copyright SET content = ?, copyright_date = ? WHERE id = ?", [$content, $copyright_date, "1"]);

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
