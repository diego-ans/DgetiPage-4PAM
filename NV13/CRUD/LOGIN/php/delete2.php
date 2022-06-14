<?php //para la tabla carros

$Email=$_POST["Correo"];
$Password=$_POST["Contraseña"];


include("conexionlogin.php");
$query="DELETE FROM inicio_sesion WHERE correo=$Email";
$query="DELETE FROM inicio_sesion WHERE pass=$Password";
$result = mysqli_query($con,$query);

mysqli_close($con);

//El html es unicamente para regresar al index
?>
<html> 
    <meta http-equiv="refresh" content="0; url='../../../index.html'">
</html>