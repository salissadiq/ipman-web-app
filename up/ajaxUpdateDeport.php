<?php
require_once  'functions.php';

if (isset($_POST['name'], $_POST['deportAddress'], $_POST['id'])) {
  $name = $_POST['name'];
  $deportAddress = $_POST['deportAddress'];
  $id = $_POST['id'];

  $updateRow = $db->updateRow("UPDATE deports SET name = ?, address = ? WHERE id  = ?", [$name, $deportAddress, $id]);

  if ($updateRow) {
    echo "
      <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Successfully!</strong> Updated
      </div>
      <div><meta HTTP-EQUIV='Refresh' CONTENT='1; URL=deport.php'></div>
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
