<!DOCTYPE html>
<html lang="en">
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
    <label for="Nombre">Nombre:</label>
    <input type="text" id="Nombre" name="Nombre" required><br>

    <label for="Apellido Paterno">Apellido Paterno:</label>
    <input type="text" id="Apellido Paterno" name="Apellido Paterno" required><br>

    <label for="Apellido Materno">Apellido Materno:</label>
    <input type="text" id="Apellido Materno" name="Apellido Materno" required><br>

    <label for="RUT">RUT:</label>
    <input type="text" id="RUT" name="RUT" required><br>

    <label for="Nacionalidad">Nacionalidad:</label>
    <select id="Nacionalidad" name="Nacionalidad" required>
        <option value="chilena">Chilena</option>
        <option value="otra">Otra Nacionalidad</option>
    </select><br>

    <!-- Sexo -->
    <label>Sexo:</label>
    <input type="radio" id="masculino" name="Sexo" value="masculino" required>
    <label for="masculino">Masculino</label>
    <input type="radio" id="femenino" name="Sexo" value="femenino" required>
    <label for="femenino">Femenino</label><br>

    <!-- Fecha de Nacimiento -->
    <label for="Fecha de Nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="Fecha de Nacimiento" name="Fecha de Nacimiento" required><br>

    <!-- Lugar de Nacimiento -->
    <label for="Lugar de Nacimiento">Lugar de Nacimiento:</label>
    <input type="text" id="Lugar de Nacimiento" name="Lugar de Nacimiento" required><br>

    <!-- Profesión -->
    <label for="Profesión">Profesion:</label>
    <input type="text" id="Profesión" name="Profesión" required><br>

    <!-- Registro de Discapacidad -->
    <label>¿Inscrito en el Registro de Discapacidad?</label><br>
    <input type="checkbox" id="¿Inscrito en el Registro de Discapacidad?" name="¿Inscrito en el Registro de Discapacidad?" value="si">
    <label for="¿Inscrito en el Registro de Discapacidad?">Si</label>
    <input type="checkbox" id="¿Inscrito en el Registro de Discapacidad?" name="¿Inscrito en el Registro de Discapacidad?" value="no">
    <label for="¿Inscrito en el Registro de Discapacidad?">No</label><br>

    <!-- Donante -->
    <label>¿Es donante?</label><br>
    <input type="checkbox" id="¿Es donante?" name="¿Es donante?" value="si">
    <label for="¿Es donante?">Si</label>
    <input type="checkbox" id="¿Es donante?" name="¿Es donante?" value="no">
    <label for="¿Es donante?">No</label><br>

    <!-- Foto -->
    <label for="foto">Foto:</label>
    <input type="file" id="foto" name="foto" accept="image/*"><br>

    <!-- Botón de envío -->
    <input type="submit" value="Enviar">
</form>

</body>
</html>

    <input type="submit" value="Registrar">
</form>

<hr>

<!-- Tabla de Personas Registradas -->
<table border="1">
    <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>RUT</th>
            <!-- Agrega más columnas según tus necesidades -->
        </tr>
    </thead>
    <tbody>
        <?php
            // Conectar a la base de datos y obtener los datos de las personas
            $db_host = "localhost";

            $db_name = "carnet";
            
            $db_user = "root";
            
            $db_pass = "";

            $conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

            if ($conexion->connect_error) {
                die("Error de conexión a la base de datos: " . $conexion->connect_error);
            }

            $query = "SELECT * FROM personas";
            $result = $conexion->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>{$row['Nombre']}</td>";
                    echo "<td>{$row['Apellido Paterno']}</td>";
                    echo "<td>{$row['Apellido Materno']}</td>";
                    echo "<td>{$row['RUT']}</td>";
                    echo "<td>{$row['Nacionalidad']}</td>";
                    echo "<td>{$row['Sexo']}</td>";
                    echo "<td>{$row['Fecha de Nacimiento']}</td>";
                    echo "<td>{$row['Lugar de Nacimiento']}</td>";
                    echo "<td>{$row['Profesión']}</td>";
                    echo "<td>{$row['¿Inscrito en el Registro de Discapacidad?']}</td>";
                    echo "<td>{$row['¿Es donante?']}</td>";
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