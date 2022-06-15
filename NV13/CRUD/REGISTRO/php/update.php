<?php
//actualizar 

$campo=$_POST['campo'];
$dato=$_POST['dato'];
$Nombre=$_POST['Nombre'];


include("conexion.php");
$query="UPDATE registrate SET $campo='$dato' WHERE nombre='".$Nombre."'";


$result = mysqli_query($con,$query);

mysqli_close($con);


//El html es unicamente para regresar al index
?>
<html> 
    <script>
        alert("Datos actualizados");
    </script>
    <meta http-equiv="refresh" content="0; url='../../../index.html'">
</html>