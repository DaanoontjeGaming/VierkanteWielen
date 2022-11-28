<?php
$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
$gebruikersnaam = $_SESSION['Username'];
$ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'");
$result = $ID->fetch();
$string = $result[0];
$accountID = intval($string);
$db->query("DELETE FROM Accounts WHERE accountID = $accountID");
header("loction: editaccinfo.php");
?>