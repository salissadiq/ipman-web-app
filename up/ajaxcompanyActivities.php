<?php
require_once  'functions.php';

if (isset($_POST['headline'], $_POST['body'])) {
  $headline = $_POST['headline'];
  $body = $_POST['body'];

  $insertRow = $db->updateRow("UPDATE  activities SET headline = ?, body = ? WHERE id = ? ", [$headline, $body, "1"]);

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
      <strong>Failed!</strong>
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
