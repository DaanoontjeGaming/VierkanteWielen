<?php

	$id=$_GET['id'];
	$username= $_POST['Username'];
	$password= $_POST['Password'];
  $email= $_POST['Email'];
  $function= $_POST['Function'];
 
	$db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
  $db->query("update `Accounts` set Username='$username', Password='$password', Email='$email', Function='$function' where AccountID='$id'");
	header('location:admin-panel.php');
?>