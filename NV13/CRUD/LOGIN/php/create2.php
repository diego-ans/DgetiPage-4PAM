<?php

$correo=$_POST=['correo'];
$contraseña=$_POST=['contrasena'];

include("conexionlogin.php");

$query="INSERT INTO inicio_sesion(
    correo, pass)

VALUES(
$correo, $contraseña)";

$result = mysqli_query($con, $query)

mysqli_close($con);
?>