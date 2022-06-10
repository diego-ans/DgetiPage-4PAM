<?php

$nombre=$_POST=['nombre'];
$apPat=$_POST=['apPat'];
$apMat=$_POST=['apMat'];
$correo=$_POST=['correo'];
$password=$_POST=['password'];
$username=$_POST=['username'];
$autoridad=$_POST=['autoridad'];

include("conexion.php");

$query="INSERT INTO registrate(
    nombre, apellido_p, apellido_m, correo, pass, nombre_de_usuario, telefono, tutor)

VALUES(
$nombre, $apPat, $apMat, $correo, $password, $username, $autoridad)";

$result = mysqli_query($con, $query)

mysqli_close($con);
?>