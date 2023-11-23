<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $curso = $_POST["curso"];

    // Procesar la foto
    $foto_nombre = $_FILES["foto"]["name"];
    $foto_temp = $_FILES["foto"]["tmp_name"];
    $foto_destino = "fotos/" . $foto_nombre;

    move_uploaded_file($foto_temp, $foto_destino);

    // Crear el carné estudiantil
    $carnet_html = "
        <html>
        <head>
            <title>Pase Estudiantil</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    text-align: center;
                }

                #carnet {
                    max-width: 300px;
                    margin: 20px auto;
                    border: 1px solid #ccc;
                    padding: 10px;
                    border-radius: 5px;
                }

                #foto {
                    max-width: 100%;
                    border-radius: 50%;
                }
            </style>
        </head>
        <body>
            <div id='carnet'>
                <h2>Carné Estudiantil</h2>
                <img id='foto' src='{$foto_destino}' alt='Foto'>
                <p><strong>Nombre:</strong> {$nombre}</p>
                <p><strong>Curso:</strong> {$curso}</p>
            </div>
        </body>
        </html>
    ";

    // Guardar el carné en un archivo
    $archivo_carnet = "carnet_estudiantil.html";
    file_put_contents($archivo_carnet, $carnet_html);

    // Redireccionar al carné generado
    header("Location: {$archivo_carnet}");
    exit();
}
?>