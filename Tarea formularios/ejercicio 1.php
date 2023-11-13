<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="reseña.php" method="POST">
        <select name="pelicula" id="pelicula">
            <?php

            $peliculas = [
                "LOS JUEGOS DEL HAMBRE. BALADA DE PÁJAROS CANTORES Y SERPIENTES",
                "ALIEN, EL OCTAVO PASAJERO",
                "JURASSIC PARK (PARQUE JURÁSICO)",
                "WISH: EL PODER DE LOS DESEOS",
                "FIVE NIGHTS AT FREDDY'S",
                "THE MARVELS",
            ];

            foreach ($peliculas AS $pelicula){
                echo "<option value='$pelicula'>$pelicula</option>";
            }
            ?>

        </select>

        <select name="estrella" id="estrella">
            <?php
            $estrellas = [
                "☆",
                "☆☆",
                "☆☆☆",
                "☆☆☆☆",
                "☆☆☆☆☆",
            ];

            foreach ($estrellas AS $estrella){
                echo "<option value='$estrella'>$estrella</option>";
            }
            ?>

        </select>

        <br>

        <input type="text" name="comentario" id="comentario">

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>