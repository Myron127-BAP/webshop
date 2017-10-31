<!DOCTYPE html>
<html lang="nl">
<head>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>Log in</title>
</head>
<body background="images/Watchdogs.gif">
<header>
<?php include_once './inc/Header.php';
include './inc/Users.php';?>
</header>
<main>
<!-- Login Container -->
<div class="container">
    <div class="row">
        <div class="col s5 offset-m3">
            <div class="card-panel login">
                <div class="card-body">
                        <img src="" alt="">
                    <h3>Inloggen</h3>
                </div>
                <form action="./inc/Login.php" method="post">
                <div class="input-field">
                    <input name="name" id="first_name_login" type="text" class="validate">
                    <label for="first_name">Gebruikers naam</label>
                </div>
                <div class="input-field">
                    <input name="password" id="password_login" type="password" class="validate">
                    <label for="password">Wachtwoord</label>
                </div>
                <button class="btn waves-effect waves-light blue" type="submit" name="Login">Login
                    <i class="material-icons right">send</i>
                </button>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
<footer>
<?php include_once './inc/Footer.php'; ?>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
