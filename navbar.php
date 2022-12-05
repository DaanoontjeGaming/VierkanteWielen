<div class="Navi">
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
  if(!$_SESSION['Ingelogd']){
    echo '<a href="inloggen.php">Log in</a>';
  } else {
    if($Functie === 'Beheerder'){
    echo '<a href="">Profiel</a>'; //Rijschoolhouder profiel pagina is nog niet 100% af
  } else if ($Functie === 'Instructeur') {
    echo '<a href="Profiel_Instructeur.php">Profiel</a>';
  } else {
    echo '<a href="">Profiel</a>'; //Leerling profiel pagina is nog niet 100% af
}}
  ?>
</div>