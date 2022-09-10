<?php
 include('conexion.php');
 if (!$conectar) {
   die("Fallo la conección ==> " . mysqli_connect_error());
 }
 echo "Conección Exitosa. <br>";




$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta="SELECT * FROM cliente where nombre_usuario='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conectar,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas)
{
    header("location:administracion.php");
}else
{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="error-login">ERROR EN LA UTENTIFICACION </h1>
    <?php   
}
mysqli_free_result($resultado);
mysqli_close($conectar);








?>