<?php

    include 'Database.inc.php';

    $_SESSION['message'] = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['password_Register'] == $_POST['password_register2']) {
            $username = $conn->real_escape_string($_POST['Username_Register']);
            $email = $conn->real_escape_string($_POST['email_Register']);
            $password_hash = password_hash($_POST['password_Register'], PASSWORD_DEFAULT);


            $_SESSION['username'] = $username;

            $sql = "INSERT INTO gebruikers(Gebruikersnaam, Email, Wachtwoord)"
                    . "VALUES ('$username', '$email', '$password_hash')";

            if ($conn->query($sql) === true)
            {
                $_SESSION['message'] = "$username is geregistreerd!";
            }
            else
                {
                    $_SESSION['message'] = "Gebruiker is niet toegevoegd";
                }
        }
    }