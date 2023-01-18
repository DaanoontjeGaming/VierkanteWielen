<?php
session_start();
require_once('functions.php');

$username = $_POST['Username'];
$password = $_POST['Password'];

    $user = 'epiz_32960176';
    $pass = 'kIxaluzZHWw';
    $db = new PDO("mysql:host=sql113.epizy.com;dbname=epiz_32960176_VierkantieWielenDB", $user, $pass);
$stmt = $db->prepare("SELECT * FROM Accounts WHERE Username = '$username'");
$stmt->execute(['username' => $username]); 
$result = $stmt->fetchAll(); 
if(count($result) === 1){
    $_SESSION['Username'] = $username;
    $_SESSION['Ingelogd'] = true;
    $_SESSION['false-user-pass'] = "";
    header("location: index.php");
}else{
    $_SESSION['Ingelogd'] = false;
    $_SESSION['false-user-pass'] = "<p class='red melding'>Onjuiste gebruikersnaam of wachtwoord!<p>";
    header("location: inloggen.php");
};
?>