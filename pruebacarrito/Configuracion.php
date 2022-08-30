<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cerveceria';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName,3307);

if ($db->connect_error) {
    die("No hay Conexion con la base de datos: " . $db->connect_error);
}
