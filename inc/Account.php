<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
// Submit Data naar Database

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {

    die("Connection mislukt: " . $con->connect_error);

}

if (isset($_POST['submitnaam']))
{
    $nieuwnaam = $_POST['nieuwnaam'];
    $email = $_POST['email'];
    $naam = $_SESSION['user'];

    $sqlinsert = "SELECT email FROM gebruikers WHERE Gebruikersnaam = '$naam'";
    $result = mysqli_query($con, $sqlinsert);

    if($result = $email)
    {
        //"TRUNCATE TABLE naam FROM gebruikers WHERE gebruikersnaam = '$naam'"
       // $sqlinsert = "INSERT INTO naam FROM gebruikers WHERE naam IS NULL" ($naam)"
    }
}