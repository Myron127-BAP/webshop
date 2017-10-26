

<link href="../../../webshop/webshop/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


<header>

<ul id="dropdown1" class="dropdown-content">
    <li><a href="Login.php">Login</a></li>
    <li><a href="Registreren.php">Register</a></li>
    <li class="divider"></li>
    <li><a href="#">Log uit</a></li>
</ul>
<nav>
    <div class="nav-wrapper red">
        <a href="Index.php" style="margin-left:15px" class="brand-logo hoverable">Home</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>

            <!-- Dropdown Tligger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>


    <div class="carousel carousel-slider center" data-indicators="true">
        <div class="carousel-item red white-text" href="#one!">
            <h2>First Panel</h2>
            <p class="white-text">This is your first panel</p>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Second Panel</h2>
            <p class="white-text">This is your second panel</p>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Third Panel</h2>
            <p class="white-text">This is your third panel</p>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Fourth Panel</h2>
            <p class="white-text">This is your fourth panel</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });

        $('.carousel.carousel-slider').carousel({fullWidth: true});

    </script>
</header>

