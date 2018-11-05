<?php
	require_once 'admin/functions.php';

	if (isset($_POST['poster_id'], $_POST['post_content'])) {

		$poster_id = $_POST['poster_id'];
		$post_content = $_POST['post_content'];
		$post_date = date("Y-m-d h:i:sa");

		$updatePost = $db->insertRow("INSERT INTO members_post(poster_id, post_content, post_date) VALUES(?, ?, ?)", [$poster_id, $post_content, $post_date]);
		if ($updatePost) {
			echo "
        <div class='alert alert-success'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong> Your message was sent Successfully !</strong>
      </div>
        ";
    } else {
    	echo "
        <div class='alert alert-danger'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Failed!</strong> To post please try again
      </div>
        ";
    }

	} else {
		echo "
        <div class='alert alert-danger'>
      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
      <strong>Failed!</strong> To post please try again
      </div>
        ";
	}
?>

	