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
  <form action="contact-form-handler.php" method="post">
    <label for="name">Naam</label>
    <input type="text" id="name" name="name" placeholder="Uw naam..">

    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Uw email..">

    <label for="subject">Onderwerp</label>
    <input type="text" id="subject" name="subject" placeholder="Het onderwerp..">
  
    <label for="message">Bericht</label>
    <textarea id="message" name="message" placeholder="Type hier uw bericht.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
<?php include('footer.php')?>
</body>
</html>