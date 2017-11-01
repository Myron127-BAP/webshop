

<link href="../../../webshop/webshop/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>


<header>
    <?php session_start(); ?>
<ul id="dropdown1" class="dropdown-content">
    <li><a href="Login.php">Login</a></li>
    <li><a href="Registreren.php">Register</a></li>
    <li class="divider"></li>
    <li><a href="Logout.php">Log uit</a></li>
</ul>
<nav>
    <div class="nav-wrapper red">
        <a href="Index.php" style="margin-left:15px" class="brand-logo hoverable">Home</a>
        <ul class="right hide-on-med-and-down">
            <li><a id="naam" href="Account.php"></a></li>
            <li><a href="#">#</a></li>

            <!-- Dropdown Tligger -->
            <li><a class="dropdown-button" href="" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a>
            </li>
        </ul>
    </div>
</nav>
    <script type="text/javascript">
        var name = '<?php echo $_SESSION['user'];?>';
        document.getElementById('naam').innerHTML= name;
    </script>
</header>


