<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle medewerkers</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php include('navbar.php') ?>

    <div class="welcome">
        <h1>Bekijk medewerkers</h1>
    </div>

    <div class="roundRect" style="background-color:#E6E6E6">
        <table class="dashboardTable">
            <tr>
                <th>Naam</th>
                <th>Medewerkernummer</th>
                <th>Email</th>
                <th>Telefoon</th>
            </tr>
            <?php
            $user = 'root';
            $pass = 'root';
            $db = new PDO('mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB', $user, $pass);
            $medewerkers = $db->query("SELECT * FROM Instructeurs");
            foreach ($medewerkers as $medewerker) {
      echo '<tr class="rowMedewerker">
                <th>'.$medewerker['Voornaam'].' '.$medewerker['Tussenvoegsel'].' '.$medewerker['Achternaam'].'</th>
                <th>'.$medewerker['InstructeursID'].'</th>
                <th>'.$medewerker['Email'].'</th>
                <th>'.$medewerker['Telefoon'].'</th>
            </tr>
        </table>
    </div>';}
    ?>
    <div class="roundRect toevoegButtonDiv" style="background-color:#E6E6E6">
        <a href="addinstructeur.php">
            <button class="buttonBlue toevoegButton" style="color: white;">Voeg medewerker toe</button>
        </a>
    </div>

    <?php include('footer.php') ?>
</body>

</html>