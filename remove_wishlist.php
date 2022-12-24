<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

$id = $_GET['id'];

if ($id != '') {
	$stmt2 = $mysqli->prepare ("DELETE FROM wishlist WHERE id = '$id'");
    $stmt2->execute();
    header("Location: wishlist.php?id=$product_id");
}
else{
	header("Location: wishlist.php?id=$product_id");
}

?>