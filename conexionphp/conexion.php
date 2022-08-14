<?php
/* $servername = "localhost";
 $database = "cerveceria";
 $username = "root";
 $password = "";

 $conectar = mysqli_connect($servername, $username, $password, $database,3306);*/
 $servername = "localhost";
 $database = "cerveceria";
 $username = "root";
 $password = "";
 $port = " 3307 ";
 //$conectar = mysqli_connect($servername, $username, $password, $database, $port);
 $conectar = new mysqli($servername, $username, $password, $database, 3307);
 if ($conectar->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conectar->connect_errno . ") " . $conectar->connect_error;
}

echo $conectar->host_info . "\n";


/*
$nombre=$_POST["nombres"];
$apellido=$$_POST["apelldos"];
$correo=$_POST["correo"];
$direccion=$_POST["direccion"];

$insertar = "INSERT INTO cliente ( apellido,nombre, correo_electronico , direccion_ciente) VALUES ('$apellido', '$nombre', '$correo','$direccion')";

$consulta= mysqli_query($conectar,$insertar);*/?>