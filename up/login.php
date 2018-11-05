<?php
require_once 'DB.php';
require_once 'functions.php';
$db = new DB();
if (isset($_POST['username'], $_POST['password'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  if (!empty($username) && !empty($password)) {
      $user = $db->getRow("SELECT * FROM users WHERE username = ? AND password = ? ", [$username, $password]);
      if($user) {
        if ($user->status == 'a') {
          $_SESSION['user'] = $user->id;
          echo "
          <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> Please wait.....
        </div>
        <div><meta HTTP-EQUIV='Refresh' CONTENT='2; URL=home'></div>
          ";
        } else {
          echo "
          <div class='alert alert-danger'>
          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <strong>Your Account has been Deactivated!</strong>.
          </div>
          ";
        }
      } else {
        echo "
        <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Incorrect Username  or Password!</strong>.
        </div>
        ";
      }
  } else {
    echo "
    <div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Fields Missing!</strong>.
    </div>
    ";
  }
}
 ?>
