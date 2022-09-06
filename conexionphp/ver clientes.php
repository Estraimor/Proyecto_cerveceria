<?PHP
include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stilos.css">
  <title>Document</title>
</head>	
</body>
<header>
    <div class="container__menu1">
        <input type="checkbox" id="check__menu"> 
        <label id="#label__check" for="check__menu">
            <i class="fa-solid fa-bars icon__menu"></i>
        </label>
        <div class="menu">
            <nav>
                <ul>
                    <div>
                        <a href="../index.html"> <img src="./imagen/etnia.jpg" class="icono" /></a>
                    </div>
					<li><a href="./administracion.php">Administracion</a></li>
					
                    
                </ul>       
            </nav>
            
        </div>
    </div>
 </header> 
 <br>
<br>

	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>apellido</td>
			<td>celular</td>
			<td>email</td>
			<td>direccion</td>	
            <td>nombre_usuario</td>
            <td>contraseña</td>
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
            <td><?php echo $mostrar['nombre_usuario'] ?></td>
            <td><?php echo $mostrar['pass'] ?></td>
           
		</tr>
	<?php 
	}
	 ?>
	</table>
	

</body>
</html>