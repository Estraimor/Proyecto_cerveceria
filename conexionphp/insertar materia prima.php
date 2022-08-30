<?php
    include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  
  
    if(isset($_POST['Enviar'])){
  
$nombre=$_POST ["Nombre"];
$peso=$_POST ["Peso"];
$tipo=$_POST["Tipo"];
$precio=$_POST ["Precio"];
$stock=$_POST ["Stock"];
$receta=$_POST["receta"];


echo "La materia prima: $nombre tiene un peso de $peso KG es de tipo $tipo tiene un presio de $$precio y hay $stock Kilogramos es para la receta Numero $receta ";


$insertar = "INSERT INTO materiaprima (Nombre_MP ,Peso_MP ,Tipo_MP,Precio_MP,stock_MP,receta_idreceta) VALUES ( '$nombre', '$peso','$tipo','$precio','$stock','$receta')";
  
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
    <h1>Su Materia prima se a cargado exitosamente </h1>
    <hi><a href="./administracion.php">Volver a la administracion</a></hi>
</body>
</html>