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
<header>
<form action="./insertar receta.php" method="POST">
<input class="controls" type="number" name="ID" placeholder="Receta numero : " required><br>
<input class="controls" type="text" name="Nombre" placeholder="Ingrese el nombre de la receta" required><br>
    <input class="controls" type="text" name="Guia" placeholder="Ingrese la guia de la receta" required><br>
    <button class="botons" type="submit" name="Enviar">Enviar</button>
    <a href="./administracion.php"><h1>Volver a la Administracion</h1></a>

</body>
</html>