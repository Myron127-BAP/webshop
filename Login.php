<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Log in</title>


    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../webshop/webshop/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../webshop/webshop/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="Login.php">Login</a></li>
    <li><a href="Registreren.php">Register</a></li>
    <li class="divider"></li>
    <li><a href="#">Log uit</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="Index.php" style="margin-left:15px" class="brand-logo">Home</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>

            <!-- Dropdown Tligger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col s5 offset-m3">
            <div class="card-panel login">
                <div class="card-body">
                    <img src="" alt="">
                    <h4>Inloggen</h4>
                </div>
                <div class="input-field">
                    <input id="first_name_login" type="text" class="validate">
                    <label for="first_name">Gebruikers naam</label>
                </div>
                <div class="input-field">
                    <input id="password_login" type="password" class="validate">
                    <label for="password">Wachtwoord</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" name="Login">Login
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include_once './inc/footer.php'; ?>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../webshop/webshop/js/materialize.js"></script>
<script src="../../webshop/webshop/js/init.js"></script>

</body>
</html>
