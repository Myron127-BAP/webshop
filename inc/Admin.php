<?php
/**
 * Created by PhpStorm.
 * User: ik niet
 * Date: 01-Nov-17
 * Time: 11:46 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Webshop";
$con = new mysqli($servername, $username, $password, $dbname);
include 'Database.inc.php';

if (isset($_POST['Fetch'])) {
    $con = new mysqli($servername, $username, $password, $dbname);

    if (!$con) {
        die("Ur bad @ this fgt git gud" . mysqli_connect_error());
    } else {
        $sql_Haal_op = "SELECT Gebruikersnaam, Email, reg_date FROM gebruikers";
        $resultaat = mysqli_query($con, $sql_Haal_op);
        if (mysqli_num_rows($resultaat) > 0) {
            while ($row = mysqli_fetch_assoc($resultaat)) {
                echo '<script type="text/javascript">',
                'Table();',
                '</script>'
                ;
                echo "<tr> <th>" . $row["Gebruikersnaam"] . "</th>" . "<th>" . $row["Email"] . "</th>" . "<th>" .
                    $row["reg_date"] . "</th> </tr>";
            }
        } else {
            echo "GEEN RESULTAAT!";
        }
    }
}
if (isset($_POST['Tables'])) {
    $con = new mysqli($servername, $username, $password, $dbname);

    if (!$con) {
        die("Connectie mislukt" . mysqli_connect_error());
    } else {
        $sql_verwijder = "DROP TABLE Gebruikers";
        $resultaat = mysqli_query($con, $sql_verwijder);
        if (mysqli_query($con, $sql_verwijder)) {

            echo "Table verwijdert!";
        } else {
            echo "ERROR" . mysqli_error($con);
        }
    }
}

if (isset($_POST['Crieer'])) {
    $con = new mysqli($servername, $username, $password, $dbname);

    if (!$con) {
        die("Connectie mislukt" . mysqli_connect_error());
    } else {
        $crieer = "CREATE TABLE Gebruikers (
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gebruikersnaam VARCHAR(30) NOT NULL,
Wachtwoord VARCHAR(300) NOT NULL,
Email VARCHAR(500),
reg_date TIMESTAMP
)" ;
        if (mysqli_multi_query($con, $crieer)) {
            if ($result = mysqli_store_result($con)) {
                while ($row = mysqli_fetch_array($result)) ;
            } else {
                echo "ERROR" . mysqli_error($con);
            }
        }
    }
}
if (isset($_POST['Product_add'])) {
    $Product_Naam = $_POST['Product_naam'];
    $Product_Beschrijving = $_POST['Product_beschrijving'];
    $Product_Aantal = $_POST['Product_aantal'];
    $Product_Plaatje = $_POST['Product_plaatje'];
    $Product_Prijs = $_POST['Product_prijs'];
    $sql_Product = "INSERT INTO artikelen(artikelnaam, artikelbeschrijving, aantal, afbeelding, artikelprijs)" . "VALUES ('$Product_Naam', '$Product_Beschrijving', '$Product_Aantal', '$Product_Plaatje', '$Product_Prijs')";
    if ($con->query($sql_Product) === true)
    {
        $_SESSION['message'] = "$username is geregistreerd!";
    }
    else
    {
        $_SESSION['message'] = "Gebruiker is niet toegevoegd";
    }
}
/*
 "CREATE TABLE Gebruikers (
id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Gebruikersnaam VARCHAR(30) NOT NULL,
Wachtwoord VARCHAR(300) NOT NULL,
Email VARCHAR(500),
reg_date TIMESTAMP
)"  */

/* "CREATE TABLE artikelen(
            id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
artikelnaam VARCHAR(255) NOT NULL,
artikelbeschrijving TEXT NOT NULL,
aantal INT(255) NOT NULL,
afbeelding varchar(225),
artikelprijs DOUBLE
)"*/
