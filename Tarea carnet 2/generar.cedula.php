<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cédula de Identidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<?php

require_once("conexion.php");
$sql = "SELECT * FROM carnet_3";
$guardar = $conexion -> query($sql);
?>
<div class = "container">
    <div class = "row">
        <div class = "col-3">
            <table class = "table">
            <tr>
                <th>Nombre</th>
                <th>Apellido_paterno</th>
                <th>Apellido_materno</th>
                <th>Rut</th>
                <th>Nacionalidad</th>
                <th>Sexo</th>
                <th>Fecha_nacimiento</th>
                <th>Lugar_nacimiento</th>
                <th>Profesion</th>
                <th>Discapacidad</th>
                <th>Donante</th>
                <th>QR</th>
            </tr>
            <?php
            while($row = $guardar -> fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['apellido_paterno'];?></td>
                <td><?php echo $row['apellido_materno'];?></td>
                <td><?php echo $row['rut'];?></td>
                <td><?php echo $row['nacionalidad'];?></td>
                <td><?php echo $row['sexo'];?></td>
                <td><?php echo $row['fecha_nacimiento'];?></td>
                <td><?php echo $row['lugar_nacimiento'];?></td>
                <td><?php echo $row['profesion'];?></td>
                <td><?php echo $row['discapacidad'];?></td>
                <td><?php echo $row['donante'];?></td>
                <td><?php require_once("qr.php")?></td>
            </tr>
            <?php
            }
            ?>
            </table>
        </div>
    </div>
</div>


</html>
