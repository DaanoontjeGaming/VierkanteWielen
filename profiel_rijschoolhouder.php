<?php 
session_start(); 
$gebruikersnaam = $_SESSION['Username'];
$user = 'root';
$pass = 'root';
$db = new PDO("mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB", $user, $pass);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn profiel</title>
    <link rel="stylesheet" type="text/css" href="style_profiel.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php include('navbar.php'); ?>

    <?php echo' <div class="welcome">Welkom bij je account, '.$gebruikersnaam.' </div>';?>

    <!---Account Details--->
    <div class="roundRect" style="background-color:#E6E6E6">
        <h2 class="rectTitle">Jouw account</h2>
        <?php
$Mail = $db->query("SELECT Email FROM Accounts WHERE Username = '$gebruikersnaam'")->fetch();
$email = $Mail[0];



echo'
        <section class="section">
            <div>
                <p>'.$gebruikersnaam.'</p>
            </div>
        </section>
        <section class="section">
            <div>
                <p>'.$email.'</p>
            </div>
        </section>
        <section class="section">
            <button type="button" class="buttonBlue">
                <a style="color:white;" href="#">Edit</a>
            </button>
        </section>
    </div>';
?>
            <div class="anderen leerlingen">
            <h2 class="rectTitle">Leerlingen</h2> <br>

<div>
    <button type="button" class="buttonBlue"> 
                <a style="color:white;" href="leerlingen.php">Meer Leerlingen</a> 
            </button> 
            <br> <br> 
            <h2 class="rectTitle">Medewerkers</h2> <br>
</div>
<div>
            <button type="button" class="buttonBlue"> 
                <a style="color:white;" href="voegtoeinstructeur.php">Meer Medewerkers</a> 
            </button> 
</div>
</body>
</html>