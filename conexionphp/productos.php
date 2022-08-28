<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="./insertar producto.php" method="POST">

<input class="controls" type="text" name="Nombre" placeholder="Ingrese Nombre de la Cerveza" required><br>
    <input class="controls" type="text" name="Descripcion" placeholder="ingrese la descripcion de la cerveza" required><br>
    <input class="controls" type="number" name="Precio" placeholder="ingrese el Precio de la cerveza " required><br>
    <input class="controls" type="number" name="Stock" placeholder="ingrese el stock de esta cerveza" required><br>
    <button class="botons" type="submit" name="Enviar">Enviar</button>
    <a href="../index.html">Volver a la pagina principal </a>
    <a href="./administracion.php">Volver a la administracion </a>

</body>
</html>