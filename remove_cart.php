<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

$id = $_GET['id'];

if ($id != '') {
	$stmt2 = $mysqli->prepare ("DELETE FROM cart WHERE id = '$id'");
    $stmt2->execute();
    header("Location: cart.php?id=$product_id");
}
else{
	header("Location: cart.php?id=$product_id");
}

?>