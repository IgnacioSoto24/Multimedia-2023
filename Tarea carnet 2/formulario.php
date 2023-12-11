<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Tabla de Personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class = "container">
    <div class = "row">
        <div class = "col-3">
            <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
                <!-- Datos personales -->
                <label for="nombres" class="form-label">Nombres: </label>
                <input type="text" name="nombre" id="nombre" class="form-control"><br>

                <label for="apellido_paterno" class="form-label">Apellido Paterno: </label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control"><br>

                <label for ="apellido_materno" class ="form-label">Apellido Materno: </label>
                <input type="text" name ="apellido_materno" id ="apellido_materno" class="form-control"><br>

                <label for="rut" class="form-label">Rut: </label>
                <input type="text" name="rut" id="rut" class="form-control"><br>

                <label for="nacionalidad" class="form-label">Nacionalidad: </label>
                    <select name="nacionalidad">
                        <option value="Chilena"> Chilena </option>
                        <option value="Peruana"> Peruana </option>
                        <option value="Mexicana"> Mexicana </option>
                        <option value="Brasileña"> Brasileña </option>
                        <option value="Paraguayo"> Paraguayo </option>
                        <option value="Panameño"> Panameño </option>
                    </select><br>
                </select><br>

                <!-- Sexo -->
                <label for="sexo" class="form-label">Sexo: </label>
                <input type="radio" name="sexo" id="sexo1" value="masculino">
                <label>Masculino</label>
                <input type="radio" name="sexo" id="sexo2" value="femenino">
                <label>Femenino</label><br>

                <!-- Fecha de Nacimiento -->
                <label for="fecha_nacimiento" class="form-label">Fecha nacimiento: </label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control">

                <!-- Lugar de Nacimiento -->
                <label for="lugar_nacimiento" class="form-label">Lugar de Nacimiento: </label>
                <input type="text" name="lugar_nacimiento" id="lugar_nacimiento" class="form-control">

                <!-- Profesión -->
                <label for="profesion" class="form-label">Profesión: </label>
                <input type="text" name="profesion" id="profesion" class="form-control">

                <!-- Registro de Discapacidad -->
                <label>¿Inscrito en el Registro de Discapacidad?</label><br>
                <input type="radio" id="discapacidad" name="discapacidad" value="si" required>
                <label for="discapacidad">Si</label>
                <input type="radio" id="discapacidad" name="discapacidad" value="no" required>
                <label for="discapacidad">No</label><br>

                <!-- Donante -->
                <label>¿Es donante?</label><br>
                <input type="radio" id="donante" name="donante" value="si" required>
                <label for="donante">Si</label>
                <input type="radio" id="donante" name="donante" value="no" required>
                <label for="donante">No</label><br>

                <!-- Foto -->
                <label for="archivo" class="form-label">Archivo</label>
                <input type="file" name="archivo" id="archivo" class="form-control">

                <!-- Botón de envío -->
                <input type="submit" value="Enviar" class="btn btn-primary mt-2">
            </form>
        </div>
    </div>
</div>


</body>
</html>

<hr>

<!-- Tabla de Personas Registradas -->
<!--<table border="1">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>RUT</th>
            <th>Nacionalidad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Lugar de nacimiento</th>
            <th>Profesion</th>
            <th>Inscripcion registro de discapacidad</th>
            <th>Donante</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        <?php
        /*
            require_once "conexion.php";
            $query = "SELECT * FROM carnet_2";
            $result = $conexion->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['nombre']}</td>";
                    echo "<td>{$row['apellido_paterno']}</td>";
                    echo "<td>{$row['apellido_materno']}</td>";
                    echo "<td>{$row['rut']}</td>";
                    echo "<td>{$row['nacionalidad']}</td>";
                    echo "<td>{$row['sexo']}</td>";
                    echo "<td>{$row['fecha_nacimiento']}</td>";
                    echo "<td>{$row['lugar_nacimiento']}</td>";
                    echo "<td>{$row['profesion']}</td>";
                    echo "<td>{$row['discapacidad']}</td>";
                    echo "<td>{$row['donante']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay personas registradas</td></tr>";
            }

            $conexion->close();*/
        ?>
    </tbody>
</table>

<a href="generar_cedula.php" target="_blank"><button>Generar Cédula</button></a>-->

</body>
</html>
