<?php
include_once("database.inc.php");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
$con = new mysqli($servername, $username, $password, $dbname);


    session_start();
    $password_inlog = $_POST["password"];
//$password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $username_inlog = $_POST["name"];

    $sqlinsert = "SELECT * FROM gebruikers WHERE Gebruikersnaam = '$username_inlog'";
    $result = mysqli_query($con, $sqlinsert);
        if ($result->num_rows >= 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
                if (password_verify($password_inlog, $row['Wachtwoord'])) {
                    $_SESSION['user'] = $username_inlog;
                    header("Location: http://localhost/webshop/Account.php"); /* Redirect browser */
                    exit();
                } else echo "password is incorrect".$row['Wachtwoord'];
            }
            else echo "$username_inlog bestaat niet";

/*$count = mysqli_num_rows($result);

if($count >= 1) {
    $_SESSION['user'] = $username_inlog;
    echo "SUCCES";
    }
    else echo "Username of password is incorrect";
echo $password_hash;*/