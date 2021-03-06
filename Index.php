
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
<body background="images/Index.png" style="background-size: 100% 100%;">
<header>
    <?php include_once './inc/Header.php';
    ?>
</header>

<main style="margin-top: 30px; margin-left: 200px; margin-right: 200px;">
    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-item red white-text">
            <a href="Artikel.php?id=1">
            <img src="images/Witcher3.png" alt="" class="responsive-img" style="height: 100%; width: 40%; margin-right: 1000px">
                Dit is tekst
            </a>
        </div>
        <div class="carousel-item red white-text">
            <a href="Artikel.php?id=2">
            <img src="images/Overwatch.jpg" alt="" class="responsive-img" style="height: 100%; width: 40%; margin-right: 1000px">
            </a>
        </div>
        <div class="carousel-item red white-text">
            <a href="Artikel.php?id=3">
                <img src="images/Dota2.jpg" style="height: 100%; width: 40%; margin-right: 1000px">
            </a>
        </div>
        <div class="carousel-item red white-text">
            <a href="Artikel.php?id=4">
                <img src="images/Fifa18.jpg" style="height: 100%; width: 40%; margin-right: 1000px">
            </a>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });

        $('.carousel.carousel-slider').carousel({fullWidth: true});

    </script>
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
