<?php
include('conexion.php');
if (!$conectar) {
  die("Fallo la conección ==> " . mysqli_connect_error());
}
echo "Conección Exitosa. <br>";


$producto=$_POST['producto'];
$fecha=$_POST['fecha'];
$descripcion=$_POST['descripcion'];
$stock=$_POST['stock_cargar'];
echo $producto;
echo"///////////////////";
echo $fecha;
echo"///////////////////";
echo $descripcion;
echo"///////////////////";
echo $stock;


$sql= "INSERT INTO carga_productos(productos_idproducto,fecha,descripcion,stock_cargar)VALUE('$producto','$fecha','$descripcion','$stock')";
$pregunta=mysqli_query($conectar,$sql);




?>