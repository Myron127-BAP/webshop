<?php
/**
 * Created by PhpStorm.
 * User: ik niet
 * Date: 26-Oct-17
 * Time: 1:33 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
// Submit Data naar Database
include 'Database.inc.php';


session_start();
$_SESSION['message'] = '';

$conn = new mysqli('localhost', 'root', '', 'webshop');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if ($_POST['password_Register'] == $_POST['password_register2'])
    {
        $username = $con ->real_escape_string($_POST['Username_Register']);
        $email = $conn->real_escape_string($_POST['email_Register']);
        $password = password_hash($_POST['password_Register'], PASSWORD_BCRYPT);


        $_SESSION['username'] = $username;

        $sql = "INSERT INTO gebruikers(Gebruikersnaam, Email, Wachtwoord)" . "VALUES ('$username', '$email', '$password')";

        if($conn->query($sql)=== true)
        {
            $_SESSION['message'] = "$username is geregistreerd!";
        }
        else
        {
            $_SESSION['message'] = "Gebruiker is niet toegevoegd";
        }
    }
}