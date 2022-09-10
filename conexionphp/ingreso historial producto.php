<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ingreso de productos</title>
</head>
<body>
    <form action="./insertar historial producto.php" method="POST">
    <input type="text" name="producto" placeholder="ingrese el numero del producto que se va a almacenar">
    <input type="date" name="fecha">
    <input type="text" name="descripcion" placeholder="ingrese en detalle que fue lo que hizo">
    <input type="number" name="stock_cargar" placeholder="ingrese la cantidad de botellas a cargar ">
    <input type="submit" value="ENVIAR" >
    </form>
</body>
</html>