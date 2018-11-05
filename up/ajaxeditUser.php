<?php
require_once  'functions.php';

if (isset($_POST['username'], $_POST['password'], $_POST['name'], $_POST['id'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $id = $_POST['id'];

  $updateRow = $db->updateRow("UPDATE users SET username = ?, password = ?, name = ? WHERE id  = ?", [$username, $password, $name, $id]);

  if ($updateRow) {
    echo "
      <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Successfully!</strong> Updated
      </div>
      <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=manageUser.php'></div>
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
 ?>
