<?php

$mysql = new MySqli('localhost', 'root', '', 'webshop');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$artikel = $mysql->query("SELECT * FROM artikelen WHERE id = " . $mysql->escape_string($id) . "")->fetch_object();

?>

<!doctype html>
<html lang="en">
<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bekijk artikel ~ <?= $artikel->artikelnaam; ?></title>

</head>
<body>
<div class="TitelGame">
    <?= $artikel->artikelnaam; ?>
</div>
<div class="BeschrijvingGame">
    <?= $artikel->artikelbeschrijving; ?>
</div>
<div class="PrijsGame">
Kost: <?= $artikel->artikelprijs; ?>
</div>
</body>
</html>