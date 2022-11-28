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


?>
<!-- 
Hier komen stukjes code die je vaker gaat gebruiken en je kan aanroepen.

 -->