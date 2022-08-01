<?php
function conexionphp(){
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $dv = 'cerveceria';
    $conectar = mysqli_connect($server, $user,$pass,$dv)or die (" Error en la conexion ");
    return $conectar;
}



?>