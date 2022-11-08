<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="repsonsive.css">
</head>
<body id="inlogpage">
    <img class="logo-inlog" src="Images/logo.jpg">
    <div class="inlog-container">
    <h1 id="inlog-txt">Log in op je account</h1>
    <form action="confirm.php" method="post">
        <div class="inlogbox inlogbox1">
        <label class="inloglabel">Gebruikersnaam:</label> <br>
        <input type="text" name="Username" placeholder="username" required> <br>
        </div>
        <div class="inlogbox inlogbox2">
        <label class="inloglabel">Wachtwoord:</label> <br>
        <input type="password" name="Password" placeholder="password" required> <br>
        </div>
        <input class="btn1 btn" type="submit" name="submit" value="Log in"> <br>
        <button class="btn2 btn"><a id="registreren" href="registreren.php">Registreren</a></button>
    </form>
    </div>
</body>
</html>