<?php
session_start();
require_once('functions.php');

$gebruikersnaam = $_POST['Gebruikersnaam'];
$voornaam = $_POST['Voornaam'];
if(isset($_POST['Tussenvoegsel'])){$tussenvoegsel = $_POST['Tussenvoegsel'];}
$achternaam = $_POST['Achternaam'];
$telefoon = $_POST['Telefoon'];
$wachtwoord = $_POST['Password'];
$wachtwoord2 = $_POST['Password2'];
$email = $_POST['Email'];

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
    if($wachtwoord == $wachtwoord2){
        $db->query("INSERT INTO Accounts (`Username`, `Password`, `Email`, `Function`) VALUES ('$gebruikersnaam', '$wachtwoord', '$email', 'Leerling')");
        $ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'");
        $result = $ID->fetch();
        $string = $result[0];
        $accountID = intval($string);
        $db->query("INSERT INTO Leerlingen (`Voornaam`, `Tussenvoegsel`, `Achternaam`, `Telefoon`, `Email`, `AccountID`) VALUES ('$voornaam', '$tussenvoegsel', '$achternaam', '$telefoon', '$email', '$accountID')");
        $_SESSION['false-user-pass'] = "<p class='green melding'>Account aangemaakt!<p>";
        header("location: inloggen.php");
    } else {
        $_SESSION['false-user-pass'] = "<p class='red melding'>Wachtwoorden komen niet overeen!<p>";
        header("location: registreren.php");
    };
?>