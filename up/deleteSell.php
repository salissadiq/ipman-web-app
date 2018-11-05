<?php
require_once 'functions.php';

$id = $_GET['id'];

$deleteDeport = $db->deleteRow("DELETE FROM selling_rate WHERE id = ?", [$id]);

header('location:sellingRate');
 ?>
