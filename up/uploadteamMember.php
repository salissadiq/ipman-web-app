<?php
require_once 'functions.php';

// Check if image file is a actual image or fake image
$name = $_POST['name'];
$role = $_POST['role'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$linkedin = $_POST['linkedin'];
if(isset($_POST["submit"])) {
  $target_dir = "companyTeam/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      echo"File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
  echo"Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo"Sorry, your file is too large";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo"Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo"Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $insertMember = $db->insertRow("INSERT INTO team(name, member_picture, role, facebook, twitter, linkedin) VALUES(?, ?, ?, ?, ?, ?)",
      [$name, $target_file, $role, $facebook, $twitter, $linkedin]);
        echo"successfully added.";

    } else {
      echo"Failed added.";
    }
}
?>
