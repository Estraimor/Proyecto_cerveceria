<?php
    include('conexion.php');
    if (!$conectar) {
      die("Fallo la conección ==> " . mysqli_connect_error());
    }
    echo "Conección Exitosa. <br>";
  
  
    if(isset($_POST['Enviar'])){
  
$nombre=$_POST ["Nombres"];
$apellido=$_POST ["Apellidos"];
$celular=$_POST["celular"];
$correo=$_POST ["correo"];
$direccion=$_POST["direccion"];

echo "mi nombre es $nombre $apellido y mi celular es $correo y $direccion y $celular";


$insertar = "INSERT INTO cliente (nombre ,apellido ,celular,correo_electronico,direccion_cliente) VALUES ( '$nombre', '$apellido','$celular','$correo','$direccion')";
  
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
  <hi><a href="../index.html">Volver al menu principal</a></hi>
</body>
</html>
