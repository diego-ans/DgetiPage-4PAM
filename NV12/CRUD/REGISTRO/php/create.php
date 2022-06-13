<?php

$nombre=implode($_POST=['nombre']);
$apPat=implode($_POST=['apPat']);
$apMat=implode($_POST=['apMat']);
$correo=implode($_POST=['correo']);
$password=implode($_POST=['password']);
$username=implode($_POST=['username']);
$autoridad=implode($_POST=['autoridad']);

include("conexion.php");

$query="INSERT INTO registrate(
    nombre, apellido_p, apellido_m, correo, pass, nombre_de_usuario, telefono, tutor)

VALUES(
$nombre, $apPat, $apMat, $correo, $password, $username, $autoridad)";

$result = mysqli_query($con, $query);

mysqli_close($con);

?>