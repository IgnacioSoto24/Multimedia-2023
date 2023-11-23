<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];

    if(FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){
        echo "<span class='alert alert-success'>Email valido</span>";
    }
    else{
        echo "<span class='alert alert-danger'>Email no valido</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    
</head>
<body>
    <h1>Formulario</h1>
    <form action="#" method="POST">
        <label for="email">email: </label>
        <input type="email" id="email" name="email">

        <input type="submit" value="enviar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"  ></script>
</body>
</html>