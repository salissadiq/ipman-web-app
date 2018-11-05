<?php
require_once 'functions.php';

$id = $_GET['id'];
$getPic = $db->getRow("SELECT * FROM team WHERE id = ?", [$id]);
$picture = $getPic->member_picture;
unlink('team'.DIRECTORY_SEPARATOR.$picture);
$deleteDeport = $db->deleteRow("DELETE FROM team WHERE id = ?", [$id]);

header('location:member');
 ?>
