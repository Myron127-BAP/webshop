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
<body>
<header>
    <?php include_once './inc/Header.php';
        include './inc/Admin.php';
    ?>
</header>

<main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });

        $('.carousel.carousel-slider').carousel({fullWidth: true});

    </script>
    <div class="body-content">
        <div class="module">
            <h1>Admin Panel</h1>
            <div class="alert alert-error"></div>
            <form action=" " method="post">
                <input type="submit" value="Fetch Users" name="Fetch" class="btn btn-block btn-primary" />
                <input type="submit" value="Delete Tables" name="Tables" class="btn btn-block btn-primary" />
                <input type="submit" value="Create Table" name="Crieer" class="btn btn-block btn-primary" />
            </form>
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
