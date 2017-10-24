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
<body background="Galaxy.gif">

<?php include_once './inc/Header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col s5 offset-m3">
            <div class="card-panel login">
                <div class="card-body">
                    <img src="" alt="">
                    <h3>Registreren</h3>
                </div>
                <div class="input-field">
                    <input id="first_name_login" type="text" class="validate">
                    <label for="first_name">Gebruikersnaam</label>
                </div>
                <div class="input-field">
                    <input id="password_login" type="password" class="validate">
                    <label for="password">Wachtwoord</label>
                </div>
                <div class="input-field">
                    <input id="password_login2" type="password" class="validate">
                    <label for="password">Herhaal Wachtwoord</label>
                </div>
                <div class="input-field">
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <button class="btn waves-effect waves-light blue" type="submit" name="Login">Login
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>

  <!--  Scripts-->
  <?php include_once './inc/Footer.php'; ?>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>
</html>
