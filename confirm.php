<?php

$username = $_POST['Username'];
$password = $_POST['Password'];

$user = 'root';
$pass = 'root';
$db = new PDO('mysql:host=dockerphp-master_db_1;dbname=VierkanteWielenDB', $user, $pass);
foreach($db->query('SELECT * FROM Accounts') as $accData){
    $username2 = $accData['Username'];
    $password2 = $accData['Password'];
if($username == $username2 && $password == $password2){
    $_SESSION['Username'] = $username;
    $_SESSION['Ingelogd'] = true;
    $_SESSION['false-user-pass'] = "";
    header("location: index.php");
}else{
    $_SESSION['Ingelogd'] = false;
    $_SESSION['false-user-pass'] = "<p class='red'>Onjuiste gebruikersnaam of wachtwoord!<p>";
    header("location: inloggen.php");
}};
?>
