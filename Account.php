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
                        <?php echo "<h2>Welkom " . $_SESSION['user'] . "!</h2>";
                        include './inc/Account.php'; ?>
                    </div>
                </div>
            </div>
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                        <h5>Verander gebruikersnaam</h5>
                       <input type="text" placeholder="Nieuwe naam" name="nieuwnaam" required />
                        <input type="text" placeholder="Email" name="email" required />
                        <input type="submit" value="submit" name="submitnaam" class="btn btn-block btn-primary" />
                    </div>
                </div>
            </div>
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                        <h5>Verander Wachtwoord</h5>
                        <input type="text" placeholder="Nieuw wachtwoord" name="nieuwwachtwoord" required />
                        <input type="text" placeholder="Herhaal wachtwoord" name="herhaalwachtwoord" required />
                        <input type="text" placeholder="Oud wachtwoord" name="oudwachtwoord" required />
                        <input type="submit" value="submit" name="submitwachtwoord" class="btn btn-block btn-primary" />
                    </div>
                </div>
            </div>
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                        <h5>Gender</h5>
                        <form>
                        <input type="radio" name="gender" value="male" /> Male <br>
                        <input type="radio" name="gender" value="female" /> Gender <br>
                        <input type="submit" value="submit" name="submitwachtwoord" class="btn btn-block btn-primary" />
                        </form>
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
