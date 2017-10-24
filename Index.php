<!DOCTYPE html>
<html lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>Game Odyssey</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../webshop/webshop/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../../webshop/webshop/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="Login.php">Login</a></li>
    <li><a href="Registreren.php">Register</a></li>
    <li class="divider"></li>
    <li><a href="#!">Log uit</a></li>
</ul>

<nav>
    <div class="nav-wrapper">
        <a href="Index.php" class="brand-logo">Home</a>
        <div class="input-field right">
            <input id="search" type="search" required>
            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
            <i class="material-icons">close</i>
        </div>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>

<?php include_once './inc/footer.php'; ?>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../webshop/webshop/js/materialize.js"></script>
<script src="../../webshop/webshop/js/init.js"></script>

</body>
</html>
