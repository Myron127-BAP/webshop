<!DOCTYPE html>
<html lang="nl">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>Registreren</title>

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
      <ul class="right hide-on-med-and-down">
        <li><a href="#">#</a></li>
        <li><a href="#">#</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>
  </nav>

  <div class="row">
    <form class="col m4">
      <div class="row">
        <div class="input-field col s6">
          <input id="Gebruikersnaam" type="text" class="validate">
          <label for="last_name">Gebruikers naam</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Wachtwoord</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password_repeat" type="password" class="validate">
          <label for="password">Herhaal Wachtwoord</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Registreer
<i class="material-icons right">send</i>
</button>
    </form>
  </div>

  <!--  Scripts-->
  <?php include_once './inc/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../webshop/webshop/js/materialize.js"></script>
  <script src="../../webshop/webshop/js/init.js"></script>
</body>
</html>
