<?php
session_start();
require_once('functions.php');

$_SESSION['false-user-pass'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepagina</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <?php include('navbar.php')?>
<body>
    <div class="imgcon">
        <img class="imgclass" src="Images/download.png">
        <div class="signup"><a href="registreren.php">Begin met het rijden!</a></div>
    </div>
    <div class="info">
        <div class='info-text'>
            <h1>Rijschool vierkante wielen helpt u op weg!</h1>
            <p>Rijschool Vierkante Wielen bestaat al 19 jaar. Wij geven les in een ontspannen en vakkundige manier. Zo hebben wij al meer dan 300 leerlingen geholpen met het behalen van hun rijbewijs. Waar wacht u nog op?</p>
        </div>
        <img class="imgclass2" src="Images/geslaagd.jpg" alt="Foto van geslaagde rijles student.">
    </div>
    <div class="reviews">
        <div class="review-slide fade">
            <img class="review-img" src="Images/persoon1.png">
            <div class="review-score">★★★★★</div>
            <div class="review-text">Dankzij de leuke en goede leerzame rijlessen in een keer geslaagd voor mijn praktijkexamen. <br>
            Ook heb ik veel gehad aan de opnames die werden gemaakt tijdens de rijles.</div>
        </div>
        <div class="review-slide fade">
            <img class="review-img" src="Images/persoon2.png">
            <div class="review-score">★★★★★</div>
            <div class="review-text">Super rijschool in Almere.
            Goeie instructeur die mij gelijk op mn gemak stelde en het gevoel gaf dat ik het kon. Dankzij jullie dat ook in 1 x geslaagd !!</div>
        </div>
        <div class="review-slide fade">
            <img class="review-img" src="Images/persoon3.png">
            <div class="review-score">★★★★★</div>
            <div class="review-text">Super! Goede en duidelijke uitleg, flexibel in afspraken maken en Sebastiaan maakt rijlessen nemen <br> zelfs leuk en gezellig.
            Ik ga het zeker missen. Bedankt voor alles!</div>
        </div>
        <div class="review-slide fade">
            <img class="review-img" src="Images/persoon4.png">
            <div class="review-score">★★★★★</div>
            <div class="review-text">Je krijgt de ruimte om je eigen rijlessen in te plannen. Als je bijna gaat afrijden heb jij een streepje voor in de planning, <br> en als je voor de zekerheid een extra lesje wilt dan is dat zo geregeld. <br>
            Om het al een top rijschool, en buiten dat de auto heerlijk rijdt ga ik ook de gezelligheid missen van Sebastiaan!"</div>
        </div>
    </div>
<div class="grid-container">
     <?php
    $user = 'root';
    $pass = 'root';
    $db = new PDO("mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB", $user, $pass);
    echo getLespaketten($db, $_SESSION['Ingelogd']);
    ?> 
</div>
<script src="script.js"></script>
<?php include('footer.php')?>
</body>
</html>