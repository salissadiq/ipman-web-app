<?php
require_once 'functions.php';

$id = $_GET['id'];

$deleteDeport = $db->deleteRow("DELETE FROM users WHERE id = ?", [$id]);

header('location:manageUser');
 ?>
