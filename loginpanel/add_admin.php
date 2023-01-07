<?php 
include_once 'db-connect.php';
include_once 'session.php';

if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
}
if ($_SESSION["type"] != 'admin') {
 header("Location: main.php");
}

if (isset($_POST['email'], $_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $type = $_POST['type'];

  $stmt2 = $mysqli->prepare("INSERT INTO login (email, password, type) VALUES (?, ?, ?)");
  $stmt2->bind_param('sss', $email, $password, $type);
  $stmt2->execute();
  header('Location: main.php'); 
}
else{
  echo 'error';
}
?>