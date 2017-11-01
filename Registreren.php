<!DOCTYPE html>
<html lang="nl">
<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>Registreren</title>

</head>

<body background="images/Gaming.gif">

<header>
    <?php include_once './inc/Header.php';
    ?>
    <?php
    include './inc/Register.php';
    ?>
</header>
<main>
    <div class="body-content">
        <div class="module">
            <h1>Registreren</h1>
            <form class="form" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="alert alert-error"></div>
                <input type="text" placeholder="Gebruikersnaam" name="Username_Register" required />
                <input type="password" placeholder="Wachtwoord" name="password_Register" autocomplete="new-password" required />
                <input type="password" placeholder="Herhaal Wachtwoord" name="password_register2" autocomplete="new-password" required />
                <input type="email" placeholder="Email" name="email_Register" required />
                <input type="submit" value="Registeren" name="Registreere" class="btn btn-block btn-primary" />
            </form>
        </div>
    </div>
</main>

<!--  Scripts-->
<footer>
    <?php include_once './inc/Footer.php'; ?>
</footer>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
