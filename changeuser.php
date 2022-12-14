<?php
session_start();
$username = $_POST['username'];
$gebruikersnaam = $_SESSION['Username'];
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
$db->query("UPDATE Accounts SET Username = '$username' WHERE Username = '$gebruikersnaam'");
$_SESSION['Username'] = $username;
header("location: editaccinfo.php");
?>