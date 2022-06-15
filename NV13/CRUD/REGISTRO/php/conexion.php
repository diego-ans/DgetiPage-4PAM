<?php
$servername = "localhost";
$database = "cetis64";
$DBusername = "root";
$DBpassword = "";

$con = mysqli_connect($servername, $DBusername, $DBpassword, $database);

if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

?>