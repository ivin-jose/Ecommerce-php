<?php
include_once 'loginpanel/session.php';
include_once 'loginpanel/db-connect.php';

$product_id = $_GET['id'];
$image = $_GET['pic'];
$sellingprice = $_GET['sp'];
$originalprice = $_GET['op'];
$productname = $_GET['pname'];

if ($product_id != '') {
	$stmt2 = $mysqli->prepare ("INSERT INTO cart (product_id, image, sellingprice, originalprice, productname) VALUES (?, ?, ?, ?, ?)");
    $stmt2->bind_param('ssiis', $product_id, $image, $sellingprice, $originalprice, $productname);
    $stmt2->execute();
    header("Location: product_show.php?id=$product_id");
}
else{
	header("Location: product_show.php?id=$product_id");
}

?>