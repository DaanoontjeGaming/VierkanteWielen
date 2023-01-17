<?php
	$id=$_GET['id'];
  $db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
  $db->query("delete from `Accounts` where AccountID='$id'");
	header('location:admin-panel.php');
?>