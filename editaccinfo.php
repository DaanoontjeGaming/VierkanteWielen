<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link rel="icon" type="image/x-icon" href="Images/Cogwheel.png">
</head>
<body>
    <div class="options">
        <form class="changer-form" action="Settingspages/changeuser.php" method="POST">
            <label class="label">Gebruikersnaam aanpassen</label>
            <input class="change-box" type="text" name="username" placeholder="username">
            <input class="change-box"type="submit" name="submit" value="Aanpassen">
        </form>
        <form class="changer-form" action="Settingspages/changepass.php" method="POST">
            <label class="label">Wachtwoord aanpassen</label>
            <input class="change-box" type="password" name="password" placeholder="password">
            <input class="change-box"type="submit" name="submit" value="Aanpassen">
        </form>
        <form class="changer-form" action="Settingspages/changemail.php" method="POST">
            <label class="label">Mailadres aanpassen</label>
            <input class="change-box" type="email" name="email" placeholder="example@example.com">
            <input class="change-box"type="submit" name="submit" value="Aanpassen">
        </form>
        <form class="changer-form" action="Settingspages/changephone.php" method="POST">
            <label class="label">Mailadres aanpassen</label>
            <input class="change-box" type="text" name="phone" placeholder="0612345678">
            <input class="change-box"type="submit" name="submit" value="Aanpassen">
        </form>
        <a href="delacc.php" class="option-links del-btn">Account verwijderen</a>
    </div>
</body>
</html>