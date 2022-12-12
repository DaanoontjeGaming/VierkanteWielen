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

    <div class="welcome">
        <h1>Welkom bij je account, </h1>
    </div>

    <!---Account Details--->
    <div class="roundRect" style="background-color:#E6E6E6">
        <h2 class="rectTitle">Jouw account</h2>

        <section class="section">
            <div>
                <p>(username)</p>
            </div>
            <div>
                <p>(klantnummer)</p>
            </div>
        </section>
        <section class="section">
            <div>
                <p>(email)</p>
            </div>
            <div>
                <p>(telefoon)</p>
            </div>
        </section>

        <section class="section">
            <button type="button" class="buttonBlue">
                <a style="color:white;" href="#">Edit</a>
            </button>
        </section>
    </div>


    <!---Gekozen pakket--->
    <div class="roundRect" style="background-color:lightgray">
        <h2 class="rectTitle">Jouw pakket</h2>
        <section class="section">
            <div>
                <p>(naam pakket)</p>
            </div>
            <div>
                <p>(naam instructeur)</p>
            </div>
        </section>
        <section class="section">
            <div>
                <p>(totaal bedrag)</p>
            </div>
            <div>
                <p>(hoeveel betaald)</p>
            </div>
        </section>
        <section class="section">
            <div>
                <p>(totaal lessen)</p>
            </div>
            <div>
                <p>(hoeveel lessen tegoed)</p>
            </div>
        </section>
    </div>

    <?php include('footer.php') ?>
</body>

</html>