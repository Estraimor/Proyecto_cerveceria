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
<section class="form-register">
<form action="./insertar producto.php" method="POST">

<input class="controls" type="text" name="Nombre" placeholder="Ingrese Nombre de la Cerveza" required><br>
    <input class="controls" type="text" name="Descripcion" placeholder="ingrese la descripcion de la cerveza" required><br>
    <input class="controls" type="number" name="Precio" placeholder="ingrese el Precio de la cerveza " required><br>
    <input class="controls" type="number" name="Stock" placeholder="ingrese el stock de esta cerveza" required><br>
    <button class="botons" type="submit" name="Enviar">Enviar</button>
    <a href="./administracion.php">Volver a la administracion </a>
</section>
</body>
</html>