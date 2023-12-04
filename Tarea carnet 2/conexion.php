<?php

// Conectar a la base de datos y obtener los datos de las personas

$db_host = "localhost";

$db_name = "carnet_2";

$db_user = "root";

$db_pass = "";
$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conexion->connect_error) {
    die("Error de conexión a la base de datos: " . $conexion->connect_error);
}