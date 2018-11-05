<?php
session_start();
require_once 'DB.php';
  $db = new DB();
function loggedIn() {
  if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    return true;
  } else {
    return false;
  }
}

if (loggedIn()) {
  $id = $_SESSION['user'];

//getting user information
  $user = $db->getRow("SELECT * FROM users WHERE id = ? ", [$id]);


  $getDeports = $db->getRows("SELECT * FROM deports");
} else {
  return false;
}

function updateContactAdd($phone = null, $email = null, $address = null) {
  $db = new DB();
  $insertRow = $db->insertRow("INSERT INTO contact_info(phone, email, address) VALUES(?, ?, ?)", [$phone, $email, $address]);
}
function logout(){
  session_unset();
  $_SESSION['user'] = '';
  header('location: index.php');
}
 ?>
