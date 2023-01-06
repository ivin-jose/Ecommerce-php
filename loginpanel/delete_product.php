<?php 
include_once 'db-connect.php';
include_once 'session.php';

if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
}
if ($_SESSION["type"] != 'admin') {
 header("Location: main.php");
}

$id = $_GET['id'];


if ($id !='') {           
	$insert_stmt = $mysqli->prepare("DELETE FROM product WHERE id = ?"); 
	$insert_stmt->bind_param('i', $id);

	$insert_stmt->execute();
	header('Location: add_product.php');

}
?>

