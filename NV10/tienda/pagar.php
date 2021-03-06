<?php
include 'global/config.php';
include 'global/conexion.php';
include 'carrito.php';
include 'templates/cabecera.php';
?>

<?php
if($_POST){
    
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];

    foreach($_SESSION['CARRITO'] as $indice=>$producto){

        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
        
    }
        $sentencia=$pdo->prepare("INSERT INTO `tblventas` 
                            (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) 
        VALUES (NULL,:ClaveTransaccion, '', NOW(),:Correo,:Total, 'pendiente');");
        
        $sentencia->bindParam(":ClaveTransaccion", $SID);
        $sentencia->bindParam(":Correo", $Correo);
        $sentencia->bindParam(":Total", $total);
        $sentencia->execute();
        $idVenta=$pdo->lastInsertId();

        foreach($_SESSION['CARRITO'] as $indice=>$producto){

            $sentencia=$pdo->prepare ("INSERT INTO 
            `tbldetalleventa` (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
            VALUES (NULL,:IDVENTA,:IDPRODUCTO,:PRECIOUNITARIO,:CANTIDAD, '0');");

            $sentencia->bindParam(":IDVENTA", $idVenta);
            $sentencia->bindParam(":IDPRODUCTO", $producto['ID']);
            $sentencia->bindParam(":PRECIOUNITARIO", $producto['PRECIO']);
            $sentencia->bindParam(":CANTIDAD", $producto['CANTIDAD']);
            $sentencia->execute();

        }

    echo "<h3>".$total."</h3>";
}
?>

<div class="jumbotron text-center">
    <h1 class="display-4">¡Paso Final!</h1>
    <hr class="my-4">
    <p class="lead">Estas apunto de pagar con paypal la cantidad de:
        <h4>$<?php echo number_format($total,2); ?></h4>
    </p>
        <p>Los productos podran ser descargados una vez que se procese el pago<br/>
        <strong>(Para aclaraciones: arturoramalesceballos@gmail.com)</strong>
        </p>
</div>

    <a href="TARJETA.html">
        <button class="btn btn-primary col-12 text-center"                
        name="btnAccion"
        value="Agregar"
        type="submit"
        >
        PAGAR
        </button>
    </a>

<?php include 'templates/pie.php'?>