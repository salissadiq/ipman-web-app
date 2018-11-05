<?php
require_once 'functions.php';

$id = $_GET['id'];
$deleteDeport = $db->deleteRow("DELETE FROM contact_message WHERE id = ?", [$id]);

header('location:home');
 ?>
