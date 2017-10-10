
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../webshop/webshop/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../webshop/webshop/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php
include 'inc\Database.inc.php';
?>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="login.html">Login</a></li>
    <li><a href="register.html">Register</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>
<!-- Form shit -->

<div class="container">
    <div class="card-panel red lighten-5">
        <div class="row">
            <div class="col s3 offset-s4">
                <div class="input-field col s12">
                    <input id="first_name_login" type="text" class="validate">
                    <label for="first_name">Gebruikers naam</label>
                </div>
                <div class="input-field col s12">
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


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../webshop/webshop/js/materialize.js"></script>
<script src="../../webshop/webshop/js/init.js"></script>
</body>

<?php
/**
 * Created by PhpStorm.
 * User: ik niet
 * Date: 10-Oct-17
 * Time: 2:34 PM
 */ ?>