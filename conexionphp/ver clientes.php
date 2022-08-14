<?PHP
include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>apellido</td>
			<td>celular</td>
			<td>email</td>
			<td>direccion</td>	
		</tr>

		<?php 
		$sql="SELECT * from cerveceria.cliente";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['celular'] ?></td>
			<td><?php echo $mostrar['correo_electronico'] ?></td>
			<td><?php echo $mostrar['direccion_cliente'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>