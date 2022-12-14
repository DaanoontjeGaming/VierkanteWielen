<?php
	$username= $_POST['Username'];
	$password= $_POST['Password'];
  $email= $_POST['Email'];
  $function= $_POST['Function'];
 
  $db = new PDO("mysql:host=localhost;dbname=VierkanteWielenDB", 'root', '');
  $db->query("INSERT INTO vierkantewielendb.Accounts (`Username`, `Password`, `Email`, `Function`) VALUES ('$username', '$password', '$email', '$function')");
  header('location:accounts-table.php');
?>