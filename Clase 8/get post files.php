<?php

//$_GET

echo "GET";
echo "<br>";
echo $_GET["nombre2"];
echo"<pre>";
print_r($_GET);
echo"</pre>";

//http://127.0.0.1/Multimedia%202023/Multimedia-2023/Clase%208/get%20post%20files.php?nombre2=Juan&edad2=21#

//$_POST

echo "POST";
echo "<br>";
echo $_POST["nombre2"];
echo"<pre>";
print_r($_POST);
echo"</pre>";

//$_REQUEST

echo "REQUEST: ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_REQUEST["edad2"];
}



//$_FILE

echo "<br>";
echo "FILES: ";
echo "<br>";
echo $_FILES["nombre2"];
echo"<pre>";
print_r($_POST);
echo"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</head>
<body>

<div class="container"> 
    <div class="row">
        <div class="col">
            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="nombre1" class="form-label">Nombre</label>
                <input type="text" id="nombre1" name="nombre2" class="form-control">

                <label for="edad1" class="form-label">Edad</label>
                <input type="number" id="edad1" name="edad2" class="form-control">

                <label for="archivo">Archivo</label>
                <input type="file" name="archivo" id="archivo" class="form-control">

                <input type="submit" id="enviar" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
    

</body>
</html>