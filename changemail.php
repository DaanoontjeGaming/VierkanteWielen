<?php
session_start();
require_once('functions.php');
$email = $_POST['email'];
$gebruikersnaam = $_SESSION['Username'];

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
$accountID = intval($db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'")->fetch());
$db->query("UPDATE Accounts SET Email = '$email' WHERE Username = '$gebruikersnaam'");
header("location: editaccinfo.php");
?>