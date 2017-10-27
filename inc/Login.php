<?php
include_once("database.inc.php");
connect();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
$con = new mysqli($servername, $username, $password, $dbname);

session_start();
$password = md5($_POST["password"]);
$username = $_POST["name"];

$sqlinsert = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($con,$sqlinsert);

$count = mysqli_num_rows($result);

if($count >= 1) {
    $_SESSION['user'] = $username;
    echo "SUCCES";
    }
    else echo "Username of password is incorrect";