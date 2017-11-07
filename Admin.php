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
    ?>
</header>

<main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/Javascript_1.js"></script>
    <script>

        $(document).ready(function(){
            $('.carousel').carousel();
        });

        $('.carousel.carousel-slider').carousel({fullWidth: true});
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
    <div class="body-content">
        <div class="module">
            <h1>Admin Panel</h1>
            <div class="alert alert-error"></div>

                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header"><i class="material-icons">accessibility</i>User Related</div>
                        <div class="collapsible-body"><span><form action="#" method="post"><input type="submit" value="Fetch Users" name="Fetch" class="btn btn-block btn-primary" /></span></div></form>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">dns</i>Table Related</div>
                        <div class="collapsible-body"><span><form action="#" method="post"><input type="submit" value="Delete Tables" name="Tables" class="btn btn-block btn-primary" />
                <input type="submit" value="Create Table" name="Crieer" class="btn btn-block btn-primary" /></span></div></form>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">note_add</i>Product Related</div>
                        <div class="collapsible-body"><span><form action="#" method="post">
                            <input type="text" placeholder="Product Naam" name="Product_naam" required />
            <input type="text" placeholder="Beschrijving" name="Product_beschrijving" autocomplete="new-password" required />
                                    <input type="text" placeholder="Aantal" name="Product_aantal" required />
                                    <input type="text" placeholder="Product Plaatje" name="Product_plaatje" />
                                    <input type="text" placeholder="Product Prijs" name="Product_prijs" required />
                            <input type="submit" value="Add Product" name="Product_add" class="btn btn-block btn-primary" /></span></div></form>
                    </li>
                </ul>
            <table style="display:none" class="highlight" id="Tafel">
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Registratie Datum</th>
                </tr>
                <?php include './inc/Admin.php'; ?>
            </table>

        </div>
    </div>
</main>

<footer>
    <?php include_once './inc/Footer.php';
    ?>
</footer>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

</body>
</html>
