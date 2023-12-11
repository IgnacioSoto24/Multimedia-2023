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
$sql = "SELECT * FROM carnet_2";

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
            </tr>
            <tr>
                <td>Ignacio</td>
                <td>Soto</td>
                <td>Ceballos</td>
                <td>6516516</td>
                <td>Chilena</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </table>
        </div>
    </div>
</div>
<!-- Diseño de la cédula 
<div class = "carnet">
    <h2>Carnet de Identidad</h2>
    <img src="<?php echo $foto; ?>" alt="Foto">

</body>-->
</html>
