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
<body background="images/Gaming.gif">
<header>
<?php include_once './inc/Header.php';?>
</header>
<main>

    <div class="body-content">
        <div class="module">
            <h1>Inloggen</h1>
            <div class="alert alert-error"></div>
            <form action="./inc/Login.php" method="post">
            <input type="text" placeholder="Gebruikersnaam" name="name" required />
            <input type="password" placeholder="Wachtwoord" name="password" autocomplete="new-password" required />
            <input type="submit" value="Login" name="login" class="btn btn-block btn-primary" />
            </form>
        </div>
    </div>

</main>

<footer>
<?php include_once './inc/Footer.php';
if($_SESSION['user'] !== null)
{header("Location: http://localhost/webshop/Account.php");
    exit();}
?>
</footer>

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
