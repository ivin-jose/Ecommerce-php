<?php
 include_once 'db-connect.php';
 include_once 'session.php';

 if (isset($_POST['username'], $_POST['passwd'])) {
 	$email = $_POST['username'];
 	$password = $_POST['passwd'];

 	if (login($email, $password, $mysqli) == true) {
 		header("Location: main.php");
 	}
 	else{
 		header("Location: index.php");
 	}
 }
?>