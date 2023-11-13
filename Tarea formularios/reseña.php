<?php

$pelicula = $_POST["pelicula"];
$estrella = $_POST["estrella"];
$comentario = $_POST["comentario"];

if($estrella = $estrella[3] or $estrella = $estrella[4]){
    echo "La pelicula $pelicula fue catalogada con $estrella";
    echo "$comentario";
}else{
    echo "La pelicula $pelicula no cumple con las estrellas necesarias";
}

echo "<br>";

$comentario = $_POST["comentario"];
echo "$comentario";