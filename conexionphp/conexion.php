<?php
function conexionphp(){
    $server = 'localhost';
    $usuario = 'root';
    $pass = '';
    $dv = 'cerveceria';
    $conectar = mysqli_connect($server, $usuario,$pass,$dv)or die (" Error en la conexion ");
    return $conectar;
}



?>