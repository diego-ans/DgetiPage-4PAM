<?php 

$Nombre=$_POST["nombre"];


include("conexion.php");
$query="DELETE FROM registrate WHERE nombre=$Nombre";
$result = mysqli_query($con,$query);

mysqli_close($con);

//El html es unicamente para regresar al index
?>
<html> 
    <meta http-equiv="refresh" content="0; url='../../../html/index.html'">
</html>