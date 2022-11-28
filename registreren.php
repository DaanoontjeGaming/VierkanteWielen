<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body id="regipage">
    <?php include('navbar.php')?>
    <img class="logo-inlog" src="Images/logo.jpg">
    <div class="regi-container">
    <h1 id="inlog-txt">Maak je account aan!</h1>
    <form action="registratie.php" method="post">
    <div class="inlogbox inlogbox1">
        <label class="inloglabel">Gebruikersnaam:</label> <br>
        <input type="text" name="Gebruikersnaam" placeholder="username" required> <br>
        </div>
        <div class="inlogbox inlogbox2">
        <label class="inloglabel">Voornaam:</label> <br>
        <input type="text" name="Voornaam" placeholder="Voornaam" required> <br>
        </div>
        <div class="inlogbox inlogbox3">
        <label class="inloglabel">Tussenvoegsel:</label> <br>
        <input type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel"> <br>
        </div>
        <div class="inlogbox inlogbox4">
        <label class="inloglabel">Achternaam:</label> <br>
        <input type="text" name="Achternaam" placeholder="Achternaam" required> <br>
        </div>
        <div class="inlogbox inlogbox5">
        <label class="inloglabel">Telefoon:</label> <br>
        <input type="text" name="Telefoon" placeholder="0612345689" required> <br>
        </div>
        <div class="inlogbox inlogbox6">
        <label class="inloglabel">Wachtwoord:</label> <br>
        <input type="password" name="Password" placeholder="Wachtwoord" required> <br>
        </div>
        <div class="inlogbox inlogbox7">
        <label class="inloglabel">Herhaal wachtwoord:</label> <br>
        <input type="password" name="Password2" placeholder="Herhaal wachtwoord" required> <br>
        </div>
        <div class="inlogbox inlogbox8">
        <label class="inloglabel">Email:</label> <br>
        <input type="email" name="Email" placeholder="example@example.com" required> <br>
        </div>
        <input class="btn1 btn" type="submit" name="submit" value="Registreren"> <br>
        <button class="btn2 btn"><a id="registreren" href="inloggen.php">Inloggen =></a></button>
    </form>
    <br>
    <br>
    <?php //echo $_SESSION["false-user-pass"]; ?>
    </div>
</body>
</html>