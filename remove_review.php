<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

$id = $_GET['id'];
$product_id = $_GET['p_id'];

if ($id != '') {
	$stmt2 = $mysqli->prepare ("DELETE FROM review WHERE id = '$id'");
    $stmt2->execute();
    header("Location: product_show.php?id=$product_id");
}
else{
	header("Location: product_show.php?id=$product_id");
}

?>