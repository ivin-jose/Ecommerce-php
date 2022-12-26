<?php
	include_once 'loginpanel/db-connect.php';
	include_once 'loginpanel/session.php';

	if (isset($_POST['username'], $_POST['short_review'], $_POST['long_review'])) {
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$short_review = filter_input(INPUT_POST, 'short_review', FILTER_SANITIZE_STRING);
		$long_review = filter_input(INPUT_POST, 'long_review', FILTER_SANITIZE_STRING);
		$product_id = filter_input(INPUT_POST, 'p_id', FILTER_SANITIZE_STRING);
		$date = date('M d Y');

	}

	if ($username != '') {
		$insrt = $mysqli->prepare("INSERT INTO review (product_id, username, short_review, long_review, date) VALUES(?, ?, ?, ?, ?)");
		$insrt->bind_param('sssss', $product_id, $username, $short_review, $long_review, $date);
		 $insrt->execute();
		 //echo $product_id;
		 header('Location: product_show.php?id='. $product_id .'');
	}
	else{
		echo 'error';
	}
?>