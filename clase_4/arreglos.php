<?php
// Arreglos - Matrices - Array

// Matrices indexados
$matriz = array("Hola", 5, "Maria");
echo $matriz[2];
echo "<br>";

// Matrices asociativas
$matriz_2 = [
    "nombre" => "Juan", 
    "edad" => 20, 
    "apellido" => "Perez"
];
echo $matriz_2["apellido"];
echo "<br>";

foreach ($matriz_2 as $valor){
    echo $valor;
    echo "<br>";
}