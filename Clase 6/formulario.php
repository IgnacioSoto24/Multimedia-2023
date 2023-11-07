<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method= "post">
        <!-- averiguar distintos tipos de input en formularios -->
        <select name= "fruta" id="fruta">
            <!--
            <option value="pera">pera</option>
            <option value="manzana">manzana</option>
            <option value="naranja">naranja</option>
            -->

            <?php

            $frutas = [
                "sandia", "melon", "ciruela"
            ];

            foreach($frutas as $fruta){
                echo "<option value='$fruta'>$fruta</option>";
            };

            ?>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>