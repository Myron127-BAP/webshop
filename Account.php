<!DOCTYPE html>
<html lang="nl">
<head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

    <title>Game Odyssey</title>

</head>
<body background="images/darksoulshalloween.jpg" style="background-size: 100% 100%;">
<header>
    <?php include_once './inc/Header.php';
    if($_SESSION['user'] === null)
    {header("Location: http://localhost/webshop/Login.php");
    exit();}
    //echo "<p>Welkom " . $_SESSION['user'] . "</p>";
    ?>
</header>

<main>
    <br>
    <div class="container">
        <div class="row">
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                        <?php echo "<h2>Welkom " . $_SESSION['user'] . "!</h2>"?>
                    </div>
                </div>
            </div>
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                       <input type="text" placeholder="Nieuwe naam" name="name" required />
                        <br>
                        <p>Email</p>
                    </div>
                </div>
            </div>
                <div class="col m6 m12 blue-grey">
                    <div class="card-panel">
                        <div class="card-body">
                            <h5>Verander Wachtwoord</h5>
                            <p>Nieuw wachtwoord:</p>
                            <p>Herhaal wachtwoord:</p>
                            <p>Oud wachtwoord: </p>
                        </div>
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
