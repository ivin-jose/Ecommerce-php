<?php

include_once 'db-connect.php';
include_once 'session.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$productname = filter_input(INPUT_POST, 'productname', FILTER_SANITIZE_STRING);
$sellingprice = filter_input(INPUT_POST, 'selling_price', FILTER_SANITIZE_STRING);
$originalprice = filter_input(INPUT_POST, 'orginal_price', FILTER_SANITIZE_STRING);
$short_summery = filter_input(INPUT_POST, 'short_summery', FILTER_SANITIZE_STRING);
$long_summery = filter_input(INPUT_POST, 'long_summery', FILTER_SANITIZE_STRING);
$specifications = filter_input(INPUT_POST, 'specifications', FILTER_SANITIZE_STRING);
$category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);
$searchingkeywords = filter_input(INPUT_POST, 'searchingkeywords', FILTER_SANITIZE_STRING);
$brand = filter_input(INPUT_POST, 'brand', FILTER_SANITIZE_STRING);
$shortname = filter_input(INPUT_POST, 'shortname', FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);

	$insert_stmt = $mysqli->prepare("UPDATE product SET productname = ?, sellingprice = ?, orginalprice = ?, short_summery = ?, long_summery = ?, specifications = ?, catagory = ?, searchingkeywords = ?, brand = ?, shortname = ?, type = ? WHERE id = ?"); 

	$insert_stmt->bind_param('sssssssssssi', $productname, $sellingprice, $originalprice, $short_summery, $long_summery, $specifications, $category, $searchingkeywords, $brand, $shortname, $type, $id);

	$insert_stmt->execute();
	header("Location: edit_product.php?id=$id");


?>