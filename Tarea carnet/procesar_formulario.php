<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombres = $_POST['Nombre'];
    $apellido_paterno = $_POST['Apellido Paterno'];
    $apellido_materno = $_POST['Apellido Materno'];
    $rut = $_POST['RUT'];
    $nacionalidad = $_POST['Nacionalidad'];
    $sexo = $_POST['Sexo'];
    $fecnacim = $_POST['Fecha de Nacimiento'];
    $lugnacim = $_POST['Lugar de Nacimiento'];
    $profesion = $_POST['Profesión'];
    $inscrito = $_POST['¿Inscrito en el Registro de Discapacidad?'];
    $donante = $_POST['¿Es donante?'];
    // Obtener más datos según tus necesidades

    // Conectar a la base de datos y guardar los datos
    $db_host = "localhost";

    $db_name = "carnet";
    
    $db_user = "root";
    
    $db_pass = "";

    $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    $query = "INSERT INTO personas (Nombre, Apellido Paterno, Apellido Materno, RUT, Nacionalidad, Sexo, Fecha de Nacimiento, Lugar de Nacimiento, Profesión, ¿Inscrito en el Registro de Discapacidad?, ¿Es donante?) 
    VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$rut', '$nacionalidad', '$sexo', '$fecnacim', '$lugnacim', ' $profesion', '$inscrito', '$donante')";

    if ($conexion->query($query) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

    $conexion->close();
}
?>
