<?php
    include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  
  
    if(isset($_POST['Enviar'])){
  
        $id=$_POST["ID"];
$nombre=$_POST ["Nombre"];
$Guia=$_POST ["Guia"];


echo "Receta numer $id con el nombre de : $nombre y Los ingredientes $Guia";


$insertar = "INSERT INTO receta (idreceta,Nombre_RC,Guia_RC) VALUES ( '$id', '$nombre','$Guia')";
  
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
  <a href="./administracion.php"><h2>Volver a la Administracion </h2> </a>
</body>
</html>
