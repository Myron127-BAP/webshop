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


/*else {
    $sql = "CREATE TABLE Gebruikers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gebruikersnaam VARCHAR(30) NOT NULL,
Wachtwoord VARCHAR(300) NOT NULL,
Email VARCHAR(500),
reg_date TIMESTAMP
)";

    if ($con->query($sql) === TRUE) {
    } else {
        echo "Error creating table: " . $con->error;
    }
}
*/
?>
