<?php
include('conexion.php');

$query = "SELECT * FROM registrate";
$result = mysqli_query($con,$query);

$row = [];

if ($result->num_rows > 0)
{
	// meter los datos en un array
	$row = $result->fetch_all(MYSQLI_ASSOC);
}


?>
<!DOCTYPE html>
<html>
<style>
	td,th {
		border: 1px solid black;
		padding: 10px;
		margin: 5px;
		text-align: center;
	}
</style>

<body>
<br>

<!--Boton para regresar-->
<a href="../../../html/registrarse.html">
	<button>Regresar</button>
</a>


	<table>
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo</th>
				<th>Password</th>
				<th>Username</th>
				<th>Telefono</th>
                <th>Auroridad></th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
				foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['nombre']; ?></td>
				<td><?php echo $rows['apellido_p']; ?></td>
				<td><?php echo $rows['apellido_m']; ?></td>
				<td><?php echo $rows['correo']; ?></td>
				<td><?php echo $rows['pass']; ?></td>
				<td><?php echo $rows['nombre_de_usuario']; ?></td>
				<td><?php echo $rows['telefono']; ?></td>
                <td><?php echo $rows['tutor']; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($con);
?>
