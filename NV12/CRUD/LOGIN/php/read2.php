<?php
include('conexionlogin.php');

$query = "SELECT * FROM inicio_sesion";
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


	<table>
		<thead>
			<tr>
				
				<th>Correo</th>
				<th>Password</th>
				
			</tr>
		</thead>
		<tbody>
			<?php
			if(!empty($row))
				foreach($row as $rows)
			{
			?>
			<tr>

				<td><?php echo $rows['correo']; ?></td>
				<td><?php echo $rows['pass']; ?></td>
	
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>

<?php
	mysqli_close($con);
?>
