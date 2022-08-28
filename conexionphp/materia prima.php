<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="./insertar materia prima.php" method="POST">

<input class="controls" type="text" name="Nombre" placeholder="Ingrese Nombre de la Materi prima" required><br>
    <input class="controls" type="number" name="Peso" placeholder="ingrese el peso de la materia prima" required><br>
    <input class="controls" type="text" name="Tipo" placeholder="ingrese el tipo de la materia prima " required><br>
    <input class="controls" type="number" name="Precio" placeholder="ingrese el Precio de la materia prima" required><br>
    <input class="controls" type="number" name="Stock" placeholder="ingrese el stock de esta materia Prima en KG(Kilo/ Gramos) " required><br>
    <input class="controls" type="number" name="receta" placeholder="Ingrese para cual receta son estas Materias primas" required><br>
    <button class="botons" type="submit" name="Enviar">Enviar</button>
    <br>
    <a href="../index.html">Volver a la pagina principal </a>
    <a href="./administracion.php">Volver a la administracion </a>

</body>
</html>