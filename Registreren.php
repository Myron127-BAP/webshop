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
<header>
    <?php include_once './inc/Header.php';
    ?>
    <?php
    include './inc/Register.php';
    ?>
</header>
    <main>
<div class="container">
    <div class="row">
        <div class="col s5 offset-m3">
            <div class="card-panel login">
                <div class="card-body">
                    <img src="" alt="">
                    <h3>Registreren</h3>
                </div>
                <form action="#" method="post">
                <div class="input-field">
                    <input id="Username_Register" type="text" class="validate">
                    <label for="first_name">Gebruikersnaam</label>
                </div>
                <div class="input-field">
                    <input id="password_Register" type="password" class="validate">
                    <label for="password">Wachtwoord</label>
                </div>
                <div class="input-field">
                    <input id="password_Register2" type="password" class="validate">
                    <label for="password">Herhaal Wachtwoord</label>
                </div>
                <div class="input-field">
                    <input id="email_Register" type="email" class="validate">
                    <label for="email">Email</label>
                </div>
                <input type="submit" name="Registreere" value="Registreer">
                </form>
            </div>
        </div>
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
