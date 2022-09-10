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
			<td>id cerveza </td>
			<td>Fecha</td>
			<td>descripcion</td>
			<td>stock</td>
		</tr>

		<?php 
		$sql="SELECT * from cerveceria.carga_productos";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['productos_idproducto'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['descripcion'] ?></td>
			<td><?php echo $mostrar['stock_cargar'] ?></td>
           
		</tr>
	<?php 
	}
	 ?>
	</table>
	

</body>
</html>