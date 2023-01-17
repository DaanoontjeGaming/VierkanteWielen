<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
// Userdata aanroepen
function getUserdata($ingelogd, $username){
    if(!$ingelogd){ 
        echo "
        <div class='userdata'>
        <a href='inloggen.php' class='Account'>Inloggen</a>
        <img id='usericon' src='Images/User icon.png'>
        </div>";
    } else {
   echo "<div class='userdata'>
    <a href='https://www.youtube.com/' class='Account'>".$username."</a>
    <a class='Uitlog-btn' href='inloggen.php?loguit'>Uitloggen</a>
    <img id='usericon' src='Images/User icon.png'>
    </div>";
}};

function getLespaketten($database, $ingelogd){
foreach($database->query('SELECT * FROM `Lespaketten`') as $pakketData){
echo '
<div class="grid-item">
    <img src="images/logo.jpg">
        <h1>'.$pakketData['Pakketnaam'].'</h1>
        <h3>€'.$pakketData['Prijs'].'</h3>';
        if($pakketData['Pakketsoort'] === 'Compleet'){
        echo   '<ul>
            <li>Theorie cursus</li>
            <li>Inclusief CBR-theorie examen</li>
            <li>'.$pakketData['Lesuren'].'uur rijles</li>
            <li>Inclusief CBR-praktijk examen</li>
            <li>Schakel auto of Automaat</li>
            <li>Ongebruikte lessen worden 50% terugbetaald</li>
            <li>0% korting op extra lessen</li>
            </ul>
            </div>';
        } else {
        echo '<ul>
            <li>'.$pakketData['Lesuren'].' uur rijles</li>
            <li>Inclusief CBR-praktijkexamen</li>';
            if($pakketData['Autosoort'] === 'Schakelauto'){
            echo '<li>Schakelauto</li>
                  <li>Ongebruikte lessen worden 50% terugbetaald</li>
                  <li>0% korting op extra lessen</li>';
            } else if ($pakketData['Autosoort'] === 'Beide') {
                echo '<li>Schakelauto of Automaat</li>
                <li>1 extra les van 1 uur</li>
                <li>Kan direct worden ingepland</li>';
            } else {echo '<li>Automaat</li>
                          <li>Ongebruikte lessen worden 50% terugbetaald</li>
                          <li>0% korting op extra lessen</li>';}
        echo '</ul>';
        if($ingelogd){
            //Hier komt een button om een pakket te kopen!
            // Alleen als er is ingelogd komt er een buy button.
        }
   echo '</div>';}}}
?>
<!-- 
Hier komen stukjes code die je vaker gaat gebruiken en je kan aanroepen.

 -->