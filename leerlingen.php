<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle Leerlingen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('navbar.php') ?>

    <div class="welcome">
        <h1>Bekijk leerlingen</h1>
    </div>

    <div class="roundRect" style="background-color:#E6E6E6">
        <table class="dashboardTable">
            <tr>
                <th>Naam</th>
                <th>Klantnummer</th>
                <th>Pakket</th>
                <th>Lessen</th>
            </tr>
            <!-- Dit is alleen een voorbeeld. 
                De volgende tabelrijen moeten uit de database komen. -->
            <?php 
            $user = 'root';
            $pass = 'root';
            $db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user,$pass);
            $leerlingen = $db->query("SELECT * FROM Leerlingen");
            foreach ($leerlingen as $leerling) {
$leerlingID = intval($leerling['LeerlingID']);
$PID = $db->query("SELECT PakketID FROM Leerlingen WHERE LeerlingID = '$leerlingID'")->fetch();
$PakketID = $PID[0];
$Pname = $db->query("SELECT Pakketnaam FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();        
$Pakketnaam = $Pname[0];
$Lesaantal = $db->query("SELECT Lesuren FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();  
$Lessen = intval($Lesaantal[0]);
                echo '
                <tr>
                <th>'.$leerling['Voornaam'].' '.$leerling['Tussenvoegsel'].' '.$leerling['Achternaam'].'</th>
                <th>'.$leerlingID.'</th>';
                if(isset($PakketID)){
                    $Pname = $db->query("SELECT Pakketnaam FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();        
                    $Pakketnaam = $Pname[0];
                    $Lesaantal = $db->query("SELECT Lesuren FROM Lespaketten WHERE PakketID = '$PakketID'")->fetch();  
                    $Lessen = intval($Lesaantal[0]);
                    echo '<th>'.$Pakketnaam.'</th>';
                } else {
                    echo '<th>Geen lespakket gekocht</th>';
                }
                echo '
                <th>'.$Lessen.'</th>
                </tr>';
        }
            
            ?>
        </table>
    </div>

    <?php include('footer.php') ?>
</body>

</html>