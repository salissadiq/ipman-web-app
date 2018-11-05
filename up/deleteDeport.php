<?php
require_once 'functions.php';

$id = $_GET['id'];
$deport = $_GET['deport'];
$deleteDeport = $db->deleteRow("DELETE FROM deports WHERE id = ?", [$id]);
$deletePrice = $db->deleteRow("DELETE FROM price WHERE deport = ?", [$deport]);

header('location:deport');
 ?>
