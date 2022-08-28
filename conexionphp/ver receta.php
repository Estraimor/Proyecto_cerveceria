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
			<td>ID</td>
			<td>Nombre</td>
			<td>Ingredientes</td>
		</tr>

		<?php 
		$sql="SELECT * from cerveceria.receta";
		$result=mysqli_query($conectar,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idreceta'] ?></td>
			<td><?php echo $mostrar['Nombre_RC'] ?></td>
			<td><?php echo $mostrar['Guia_RC'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>