<?php 
 include_once 'db-connect.php';
 include_once 'session.php';

 if ($_SESSION['type'] != 'admin') {
  header("Location: index.php");
 }
?>
