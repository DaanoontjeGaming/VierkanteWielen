<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn profiel</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <?php include('navbar.php') ?>
    <?php $gebruikersnaam = 'TeddyBeertje123';
$ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'")->fetch();
   $accountID = intval($ID[0]);
$Mail = $db->query("SELECT Email FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
    $email = $Mail[0];
$Nummer = $db->query("SELECT Telefoon FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
    $telefoon = $Nummer[0];
$PID = $db->query("SELECT PakketID FROM Leerlingen WHERE AccountID = '$accountID'")->fetch();
    $PakketID = $PID[0];
$Pakket = $db->query("SELECT Pakketnaam FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();
    $Pakketnaam = $Pakket[0];
$Bedrag = $db->query("SELECT Prijs FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();
    $Prijs = intval($Bedrag[0]);
$Uren = $db->query("SELECT Lesuren FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();
    $Lesuren = intval($Uren[0]);
$Auto = $db->query("SELECT Autosoort FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();
    $Autosoort = $Auto[0];
?>
    <div class="welcome">
        <?php echo '<h1>Welkom bij je account, '.$gebruikersnaam.'</h1>';?>
    </div>

    <!---Account Details--->
    <div class="roundRect" style="background-color:#E6E6E6">
        <h2 class="rectTitle">Jouw account</h2>

        <section class="section">
            <div>
                <?php echo '<p>'.$gebruikersnaam.'</p>'?>
            </div>
            <div>
                <?php echo '<p>'.$accountID.'</p>'?>
            </div>
        </section>
        <section class="section">
            <div>
                <?php echo '<p>'.$email.'</p>'?>
            </div>
            <div>
                <?php echo '<p>'.$telefoon.'</p>'?>
            </div>
        </section>

        <section class="section">
            <button type="button" class="buttonBlue">
                <a style="color:white;" href="editaccinfo.php">Edit</a>
            </button>
        </section>
    </div>

    <!---Gekozen pakket--->
    <div class="roundRect" style="background-color:lightgray">
        <h2 class="rectTitle">Jouw pakket</h2>
        <section class="section">
            <div>
                <?php echo '<p>'.$Pakketnaam.'</p>'?>
            </div>
            <div>
                <?php echo '<p>'.$Autosoort.'</p>'?>
            </div>
        </section>
        <section class="section">
            <div>
                <?php echo '<p>€'.$Prijs.',99</p>'?>
            </div>
            <div>
                <?php echo '<p>'.$Lesuren.'</p>'?>
            </div>
        </section>
    </div>

    <?php include('footer.php') ?>
</body>

</html>