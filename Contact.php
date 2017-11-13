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
<body background="images/Watchdogs.gif">
<header>
    <?php include_once './inc/Header.php';

    ?>
</header>

<main>
    <?php  include_once './inc/Mail.php'; ?>
    <br>
    <div class="container">
        <div class="row">
            <div class="col m6 m12 blue-grey">
                <div class="card-panel">
                    <div class="card-body">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <h2>Contact Pagina</h2>
                                    <form action="./inc/Login.php" method="post">
                                        <div class="input-field col s12">
                                            <input type="text" name="Email.onderwerp"><br>
                                            <label for="Email.onderwerp">Onderwerp </label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input type="text" name="Email.email"><br>
                                            <label for="Email.email">Uw Email</label>
                                        </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">

                                        <textarea id="textarea1" name="Email.inhoud" class="materialize-textarea"></textarea>
                                        <label for="textarea1">Email Inhoud </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Verzend" name="Email.verzend" class="btn btn-block btn-primary"/>
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
