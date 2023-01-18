  <div class="Navi">
  <img href="index.php" src="images/logo.jpg">
  <a href="index.php">Home</a>
  <a href="news.html">News</a>
  <a href="contact.php">Contact</a>
  <?php
   $gebruikersnaam = $_SESSION['Username'];
   $user = 'root';
   $pass = 'root';
   $db = new PDO("mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB", $user, $pass);
   $ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'");
   $result = $ID->fetch();
   $string = $result[0];
   $accountID = intval($string);
   $Functie = $db->query("SELECT `Function` FROM Accounts WHERE AccountID = $accountID");
   $Vname = $db->query("SELECT `Voornaam` FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
   $Voornaam = $Vname[0];
   $Tv = $db->query("SELECT `Voornaam` FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
   $Tussenvoegsel = $Tv[0];
   $Aname = $db->query("SELECT `Achternaam` FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
   $Achternaam = $Aname[0];
   $namelink = $Voonaam.$Tussenvoegsel.$Achternaam;
   $link = '<a target="_blank" href="https://calendly.com/'.$namelink.'/rijles/">Rijles plannen</a>';
  if(!$_SESSION['Ingelogd']){
    echo '<a href="inloggen.php">Log in</a>';
  } else {
    if($Functie === 'Beheerder'){
    echo '<a href="profiel_rijschoolhouder.php">Profiel</a>'; 
  } else if ($Functie === 'Instructeur') {
    echo '<a href="Profiel_Instructeur.php">Profiel</a>';
  } else {
    echo $link;
    echo '<a href="profiel_leerling.php">Profiel</a>'; 
}
  echo '<a href="inloggen.php?loguit">Uitloggen</a>';
}
  ?>
</div>