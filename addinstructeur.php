<?php
session_start();
require_once('functions.php');

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
if($wachtwoord === $wachtwoord2){
    $db->query("INSERT INTO Accounts (`Username`, `Password`, `Email`, `Function`) VALUES ('$gebruikersnaam', '$wachtwoord', '$email', 'Instructeur')");
    $ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'");
    $result = $ID->fetch();
    $string = $result[0];
    $accountID = intval($string);
    $db->query("INSERT INTO Instructeurs (`Voornaam`, `Tussenvoegsel`, `Achternaam`, `Telefoon`, `Email`, `AccountID`) VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$telefoon', '$email', '$accountID')");
    $_SESSION['false-user-pass'] = "<p class='green melding'>Account aangemaakt!<p>";
    header("location: admin.php");
} else {
    $_SESSION['false-user-pass'] = "<p class='red melding'>Wachtwoorden komen niet overeen!<p>";
    header("location: admin.php");
};
?>