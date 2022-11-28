<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Are you sure?</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
</head>
<body>
    <form action="Settingspages/delconfirm.php" method="POST">
        <h1 id="delete-msg">Type hieronder je wachtwoord in en druk op verwijder account om je account te verwijderen</h1>
        <div class="form-container">
        <input id="confirm-box" type="password" name="confirmation" placeholder="password" required>
        <input id="verwijder-btn" type="submit" name="submit" value="Verwijder account!">
        </div>
    </form>
    </div>
</body>
</html>