<?php
require_once  'functions.php';

if (isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $message_date = date("Y-m-d h:i:sa");

  $insertRow = $db->insertRow("INSERT INTO contact_message(name, email, subject, message, message_date, status) VALUES(?, ?, ?, ?, ?,?)",
  [$name, $email, $subject, $message, $message_date, "a"]);

  if ($insertRow) {
    echo "
      <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Successfully!</strong> Sent
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
