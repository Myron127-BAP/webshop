<?php
include_once("database.inc.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
$con = new mysqli($servername, $username, $password, $dbname);

session_start();
$password_inlog = password_hash($_POST['password'], PASSWORD_BCRYPT);
$username_inlog = $_POST["name"];

$sqlinsert = "SELECT id FROM gebruikers WHERE Gebruikersnaam = '$username_inlog' and Wachtwoord = '$password_inlog'";
$result = mysqli_query($con,$sqlinsert);

$count = mysqli_num_rows($result);

if($count >= 1) {
    $_SESSION['user'] = $username_inlog;
    echo "SUCCES";
    }
    else echo "Username of password is incorrect";
echo $password_inlog;