<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
// Submit Data naar Database

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection mislukt: " . $conn->connect_error);

}

function Register()
{
    session_start();
    $_SESSION['message'] = '';

    $conn = new mysqli('localhost', 'root', '', 'webshop');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['password_Register'] == $_POST['password_register2']) {
            $username = $conn->real_escape_string($_POST['Username_Register']);
            $email = $conn->real_escape_string($_POST['email_Register']);
            $password_hash = password_hash($_POST['password_Register'], PASSWORD_BCRYPT);


            $_SESSION['username'] = $username;

            $sql = "INSERT INTO gebruikers(Gebruikersnaam, Email, Wachtwoord)" . "VALUES ('$username', '$email', '$password_hash')";

            if ($conn->query($sql) === true) {
                $_SESSION['message'] = "$username is geregistreerd!";
            } else {
                $_SESSION['message'] = "Gebruiker is niet toegevoegd";
            }
        }
    }

    function Login()
    {
        session_start();
        $conn = new mysqli('localhost', 'root', '', 'webshop');
        $password_inlog = $_POST["password"];
//$password_hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $username_inlog = $_POST["name"];

        $sqlinsert = "SELECT * FROM gebruikers WHERE Gebruikersnaam = '$username_inlog'";
        $result = mysqli_query($conn, $sqlinsert);
        if ($result->num_rows >= 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if (password_verify($password_inlog, $row['Wachtwoord'])) {
                $_SESSION['user'] = $username_inlog;
                header("Location: http://localhost/webshop/Account.php"); /* Redirect browser */
                exit();
            } else echo "password is incorrect".$row['Wachtwoord'];
        }
        else echo "$username_inlog bestaat niet";

    }
}
