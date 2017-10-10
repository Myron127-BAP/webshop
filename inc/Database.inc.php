<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_database";
// Submit Data naar Database

$con = new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error) {

    die("Connection mislukt: " . $con->connect_error);

}
else {
  echo "Connectie gemaakt";
}

?>
