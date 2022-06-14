<?php
$servername = "localhost";
$database = "cetis64";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

?>