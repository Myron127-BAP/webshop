<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webshop";
// Submit Data naar Database

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {

    die("Connection mislukt: " . $con->connect_error);

}

if (isset($_GET['submitnaam']))
{
    session_start();
    $nieuwnaam = $_GET['nieuwnaam'];
    $email = $_GET['email'];
    $naam = $_SESSION['user'];

    $sqlinsert = "SELECT Email FROM gebruikers WHERE Gebruikersnaam = '$naam'";
    $result = mysqli_query($con, $sqlinsert);

    if($result = $email) {
        $sqlupdate = "UPDATE gebruikers SET Gebruikersnaam = '$nieuwnaam' WHERE Email = '$result'";
        mysqli_query($con, $sqlupdate);
        $_SESSION['user'] = $nieuwnaam;
        echo '<script language="javascript">';
        echo 'alert("Gebruikersnaam veranderd")';
        echo '</script>';
        header("Location: http://localhost/webshop/Account.php");
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("verkeerde email")';
        echo '</script>';
    }
}