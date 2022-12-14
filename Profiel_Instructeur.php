<?php
session_start();
$username = $_SESSION['Username'];
?>
<head>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn profiel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include('navbar.php')?>

<!---WELCOME TEXT--->
<div class="welcome">
    <h1>Welkom bij je account,</h1>
</div>

<!---ACCOUNT DETAILS --->
<div class="roundRect" style="background-color:lightgray">
    <h2 class="rectTitle">Jouw account</h2>
    <?php
    $user = 'root';
    $pass = 'root';
    $db = new PDO("mysql:host=vierkantewielen_db_1;dbname=VierkanteWielenDB", $user, $pass);
    $ID = $db->query("SELECT AccountID FROM Accounts WHERE Username = '$gebruikersnaam'")->fetch();
    $accountID = intval($ID[0]);
    $Mail = $db->query("SELECT Email FROM Instructeurs WHERE AccountID = '$accountID'")->fetch();
    $email = $Mail[0];
    $Nummer = $db->query("SELECT Telefoon FROM Instructeurs WHERE AccountID = '$accountID'")->fetch();
    $telefoon = $Nummer[0];
    echo'
    <section class="section">
        <div>
            <p>'.$username.'</p>
        </div>
    </section>
    <section class="section">
        <div>
            <p>'.$email.'</p>
        </div>
        <div>
            <p>'.$telefoon.'</p>
        </div>
    </section>
    <section class="section">
        <button type="button" class="buttonBlue"><a style="color:white;" href="editaccinfo.php">Edit</a></button>
    </section>';
    ?>
</div>


<!---ZIEK MELDEN --->
<div class="roundRect" style="background-color:#E6E6E6">
    <h2 class="rectTitle">Ziek Melden</h2>
    <section class="section">
        <form>
            <label for="datumVanaf">Datum vanaf:</label><br>
            <input type="date" id="datumVanaf" name="datum"><br>
            <label for="datumTot">Datum tot:</label><br>
            <input type="date" id="datumTot" name="datum"><br>
        </form>
    </section>
    <section class="section">
        <div>
            <p>Reden:</p>
        </div>
        <div>
            <form> <!-- Hier moet nog een action & method komen om de values op te slaan en te verzenden naar de agenda. -->
                <input type="radio" id="ziek" name="reden" value="ziek">
                <label for="ziek">Ziek</label><br>
                <input type="radio" id="anders" name="reden" value="anders">
                <label for="anders">Anders:</label>
                <input type="text" id="andersReden" name="reden">
                </section>
                <section class="section">
                <input type="submit" class="buttonBlue" style="color:white;" value='Verzenden'>
                </section>
            </form>
        </div>
</div>

</body>

</html>