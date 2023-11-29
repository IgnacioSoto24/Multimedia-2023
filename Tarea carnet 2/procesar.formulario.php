<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombres = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $rut = $_POST['rut'];
    // Obtener más datos según tus necesidades

    // Conectar a la base de datos y guardar los datos
    $db_host = "localhost";

    $db_name = "carnet 2";

    $db_user = "root";

    $db_pass = "";
    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    $query = "INSERT INTO carnet_2 (nombre, apellido_paterno, apellido_materno, rut) VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$rut')";
    // Agrega más campos y valores según tus necesidades

    if ($conexion->query($query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

    $conexion->close();
}
?>
