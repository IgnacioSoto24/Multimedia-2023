<?php
    // Obtener los datos del formulario
    $nombres = $_POST['nombre'];
    $apellido_paterno = $_POST['apellido_paterno'];
    $apellido_materno = $_POST['apellido_materno'];
    $rut = $_POST['rut'];
    $nacionalidad = $_POST['nacionalidad'];
    $sexo = $_POST['sexo'];
    $fecha_nacim = $_POST['fecha_nacimiento'];
    $lugar_nacim = $_POST['lugar_nacimiento'];
    $profesion = $_POST['profesion'];
    $discapacidad = $_POST['discapacidad'];
    $donante = $_POST['donante'];
    
    //Incluir base de datos
    requiere_once("conexion.php");


    $query = "INSERT INTO carnet_2 (nombre, apellido_paterno, apellido_materno, rut, nacionalidad, sexo, fecha_nacimiento, lugar_nacimiento, profesion, discapacidad, donante) 
    VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$rut', '$nacionalidad', '$sexo', '$fecha_nacim', '$lugar_nacim', '$profesion', '$discapacidad', '$donante')";
    

    if ($conexion->query($query) == TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

    $conexion->close();
?>
