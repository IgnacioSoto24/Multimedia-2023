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
    $archivo = $_FILES['archivo'];

    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo['name']);

    if(move_uploaded_file($archivo['tmp_name'], $archivo_destino)){
        echo "Subida exitosa " . basename($archivo['name']) . " ha sido subido";
    }else{
        echo "Ha ocurrido un error al subir el archivo";
    }
    //Incluir base de datos
    require_once("conexion.php");


    $query = "INSERT INTO carnet_2 (nombre, apellido_paterno, apellido_materno, rut, nacionalidad, sexo, fecha_nacimiento, lugar_nacimiento, profesion, discapacidad, donante) 
    VALUES ('$nombres', '$apellido_paterno', '$apellido_materno', '$rut', '$nacionalidad', '$sexo', '$fecha_nacim', '$lugar_nacim', '$profesion', '$discapacidad', '$donante')";
    

    if ($conexion->query($query) == TRUE) {
        echo "<br>";
        echo "Registro exitoso";
    } else {
        echo "Error al registrar: " . $conexion->error;
    }

    require_once("generar.cedula.php");

    $conexion->close();
?>
