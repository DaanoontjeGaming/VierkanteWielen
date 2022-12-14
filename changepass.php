<?php
session_start();
$password = $_POST['password'];
$gebruikersnaam = $_SESSION['Username'];

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);

$db->query("UPDATE Accounts SET `Password` = '$password' WHERE Username = '$gebruikersnaam'");
header("location: editaccinfo.php");
?>