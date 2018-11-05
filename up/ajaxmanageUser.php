<?php
require_once  'functions.php';

if (isset($_POST['username'], $_POST['password'], $_POST['name'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];

  $insertRow = $db->insertRow("INSERT INTO users(username, password, name, leve, status) VALUES(?, ?, ?, ?, ?)", [$username, $password, $name, "0", "a"]);

  if ($insertRow) {
    echo "
      <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Successfully!</strong> Created
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
} else {
  echo "
    <div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Somthing !</strong> Went wrong
    </div>
  ";
}
 ?>
