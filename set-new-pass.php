<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vierkante Wielen contact</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include('navbar.php')?>
<div class="contact-container">
    <form action="set-new-pass-handler.php" method="post">
        <label for="rcode">Voer hier uw wachtwoord reset code in</label>
        <input type="text" id="rcode" name="rcode" placeholder="Uw code.." style="margin-top:20px">
        <label for="password1">Voer hier een nieuw wachtwoord in</label>
        <input type="text" id="password1" name="password1" placeholder="Uw nieuwe wachtwoord..">
        <label for="password2">Herhaal het wachtwoord</label>
        <input type="text" id="password2" name="password2" placeholder="Herhaal het wachtwoord..">
        <input type="submit" value="Submit">
  </form>
</div>
<?php include('footer.php')?>
</body>
</html>