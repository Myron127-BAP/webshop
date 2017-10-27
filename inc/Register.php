<?php
/**
 * Created by PhpStorm.
 * User: ik niet
 * Date: 26-Oct-17
 * Time: 1:33 PM
 */
include 'Database.inc.php';
if(isset($_POST['Registreere']))
connect();

        $Naam = $con->real_escape_string($_POST['Username_Register']);
        $Email = $con->real_escape_string($_POST['email_Register']);
        $Wachtwoord = md5($_POST['password_Register']);

        $SQLinsert = "INSERT INTO gebruiker (Naam, Plaats, Leeftijd)
  VALUES ('$Naam', '$Plaats', '$Leeftijd')";

/* NIET AAN ZITTEN EIGENDOM VAN LEROY */