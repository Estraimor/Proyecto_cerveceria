<?php
    include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  
  
    if(isset($_POST['Enviar'])){
  
$nombre=$_POST ["Nombre"];
$descripcion=$_POST ["Descripcion"];
$precio=$_POST["Precio"];
$stock=$_POST ["Stock"];

echo "La cerveza $nombre es  $descripcion y cuesta $precio y hay  $stock unidades.";


$insertar = "INSERT INTO productos (Nombre_producto ,descripcion_producto ,precio_producto,stock_producto) VALUES ( '$nombre', '$descripcion','$precio','$stock')";
  
$consulta= mysqli_query($conectar,$insertar);
    }
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
    <h1>Su producto se a caergado exitosamente </h1>
    <a href="./administracion.php">Volver a la administracion</a>
</body>
</html>