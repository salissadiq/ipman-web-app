<?php
require_once 'admin/functions.php';
if (isset($_POST['username'], $_POST['password'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  if (!empty($username) && !empty($password)) {
      $exco = $db->getRow("SELECT * FROM excos WHERE username = ? AND password = ? ", [$username, $password]);

      $member = $db->getRow("SELECT * FROM members WHERE username = ? AND password = ? ", [$username, $password]);

      if ($exco) {
        $_SESSION['exco'] = $exco->id;
        echo "
        <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Success!</strong> Please wait.....
      </div>
      <div><meta HTTP-EQUIV='Refresh' CONTENT='2; URL=exco'></div>
        ";
      } elseif ($member) {
        $_SESSION['member'] = $member->id;
        echo "
        <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Success!</strong> Please wait.....
      </div>
      <div><meta HTTP-EQUIV='Refresh' CONTENT='2; URL=member'></div>
        ";
      } else {
        echo "
        <div class='alert alert-danger'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Failed!</strong> Wrong Username or Password!
      </div>
        ";
      }
    }
}
 ?>
