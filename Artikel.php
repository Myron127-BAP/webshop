<?php

$mysql = new MySqli('localhost', 'root', '', 'webshop');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$artikel = $mysql->query("SELECT * FROM artikelen WHERE id = " . $mysql->escape_string($id) . "")->fetch_object();

?>

<!doctype html>
<html lang="en">
<head>
    <?php include_once './inc/Header.php'; ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bekijk artikel ~ <?= $artikel->artikelnaam; ?></title>

</head>
<body style="background-color: brown">
<main>
<div class="container">
    <br>
    <br>
    <div class="row">
        <div class="col m6 m12 blue-grey">
            <div class="card-panel">
                <div class="card-body">
                    <div class="TitelGame">
                        <h2><?= $artikel->artikelnaam; ?></h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col m2 m3 blue-grey">
            <div class="card-panel">
                <div class="card-body">
                    <div class="PlaatjeGame center-align">
                        <image src=<?= $artikel->afbeelding; ?> width="175" height="200"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m3 m6 blue-grey">
            <div class="card-panel">
                <div class="card-body">
                    <div class="BeschrijvingGame">
                        <?= $artikel->artikelbeschrijving; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m1 m3 blue-grey">
            <div class="card-panel">
                <div class="card-body">
                    <div class="PrijsGame">
                        Kost: €<?= $artikel->artikelprijs; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col m3 m3 blue-grey">
            <div class="card-panel">
                <div class="card-body">
                    <div class="BeschrijvingGame">
                        <input  class="btn btn-block btn-primary" type="submit" value="Voeg toe aan Winkelwagen" name="Winkelwagen"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
<footer>
    <?php include_once './inc/Footer.php'; ?>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</html>