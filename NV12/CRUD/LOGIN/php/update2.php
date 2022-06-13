<?php
//actualizar 

$campo=$_POST['campo'];
$dato=$_POST['dato'];
$Correo=$_POST['Correo'];


include("conexionlogin.php");
$query="UPDATE inicio_sesion SET $campo='$dato' WHERE correo=$Correo";


$result = mysqli_query($con,$query);

mysqli_close($con);


//El html es unicamente para regresar al index
?>
<html> 
    <meta http-equiv="refresh" content="0; url='../../../index.html'">
</html>