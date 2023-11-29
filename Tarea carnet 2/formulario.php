<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario y Tabla de Personas</title>
</head>
<body>

<!-- Formulario de Registro -->
<form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>

<form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
    <!-- Datos personales -->
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br>

    <label for="apellido_paterno">Apellido Paterno:</label>
    <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>

    <label for="apellido_materno">Apellido Materno:</label>
    <input type="text" id="apellido_materno" name="apellido_materno" required><br>

    <label for="rut">RUT:</label>
    <input type="text" id="rut" name="rut" required><br>

    <label for="nacionalidad">Nacionalidad:</label>
    <select id="nacionalidad" name="nacionalidad" required>
        <option value="chilena">Chilena</option>
        <option value="otra">Otra Nacionalidad</option>
    </select><br>

    <!-- Sexo -->
    <label>Sexo:</label>
    <input type="radio" id="masculino" name="sexo" value="masculino" required>
    <label for="masculino">Masculino</label>
    <input type="radio" id="femenino" name="sexo" value="femenino" required>
    <label for="femenino">Femenino</label><br>

    <!-- Fecha de Nacimiento -->
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br>

    <!-- Lugar de Nacimiento -->
    <label for="lugar_nacimiento">Lugar de Nacimiento:</label>
    <input type="text" id="lugar_nacimiento" name="lugar_nacimiento" required><br>

    <!-- Profesión -->
    <label for="profesion">Profesión:</label>
    <input type="text" id="profesion" name="profesion" required><br>

    <!-- Registro de Discapacidad -->
    <label>¿Inscrito en el Registro de Discapacidad?</label><br>
    <input type="checkbox" id="discapacidad" name="discapacidad" value="si">
    <label for="discapacidad">Si</label>
    <input type="checkbox" id="discapacidad" name="discapacidad" value="no">
    <label for="discapacidad">No</label><br>

    <!-- Donante -->
    <label>¿Es donante?</label><br>
    <input type="checkbox" id="donante" name="donante" value="si">
    <label for="donante">Si</label>
    <input type="checkbox" id="donante" name="donante" value="no">
    <label for="donante">No</label><br>

    <!-- Foto -->
    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto" accept="image/*"><br>

    <!-- Botón de envío -->
    <input type="submit" value="Enviar">

    <input type="submit" value="Registrar">
</form>

</body>
</html>

<hr>

<!-- Tabla de Personas Registradas -->
<table border="1">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>RUT</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // Conectar a la base de datos y obtener los datos de las personas
            $db_host = "localhost";

            $db_name = "carnet 2";

            $db_user = "root";

            $db_pass = "";
            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if ($conexion->connect_error) {
                die("Error de conexión a la base de datos: " . $conexion->connect_error);
            }

            $query = "SELECT * FROM carnet_2";
            $result = $conexion->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['nombre']}</td>";
                    echo "<td>{$row['apellido_paterno']}</td>";
                    echo "<td>{$row['apellido_materno']}</td>";
                    echo "<td>{$row['rut']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay personas registradas</td></tr>";
            }

            $conexion->close();
        ?>
    </tbody>
</table>

<a href="generar_cedula.php" target="_blank"><button>Generar Cédula</button></a>

</body>
</html>
