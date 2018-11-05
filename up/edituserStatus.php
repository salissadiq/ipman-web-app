<?php
require_once 'functions.php';

$id = $_GET['id'];

if ($user->status === 'a') {
  $updateStatus = $db->updateRow("UPDATE users SET status = ? WHERE id = ?", ["b", $id]);

} elseif ($user->status === 'b') {
  $updateuserStatus = $db->updateRow("UPDATE users SET status = ? WHERE id = ?", ["a", $id]);
  header('location:manageUser');
  echo "Deactive";
}

 ?>
