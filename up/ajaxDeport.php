<?php
require_once  'functions.php';

if (isset($_POST['name'], $_POST['deportAddress'])) {
  $name = $_POST['name'];
  $deportAddress = $_POST['deportAddress'];

  $insertRow = $db->insertRow("INSERT INTO deports(name, address) VALUES(?, ?)", [$name, $deportAddress]);

        header('location: deport');
}
 ?>
