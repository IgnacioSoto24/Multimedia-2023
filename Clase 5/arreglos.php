<?php

//arreglo multidimensional

$arreglo = [
    [
        "nombre"    => "Juan",
        "apellido"  => "Perez",
        "edad"      => 25,
    ],
    [
        "nombre"    => "Pedro",
        "apellido"  => "Gomez",
        "edad"      => 40,
    ],
];

foreach($arreglo as $valor){
    foreach($valor as $key => $valor2){
        echo "$key: $valor2";
        echo "<br>";
    }
}

echo "<br>";

$frutas = [
    "manzana", "pera", "naranja"
];

//modificar un elemento
echo  $frutas[2] = "uva";
echo "<br>";

//añadir un elemento
$frutas [] = "naranja";
echo "<pre>";
print_r($frutas);
echo "</pre>";

//añadir en un arreglo asociativo
$persona = [
    "nombre"    => "juan",
    "apellido"  => "perez",
    "edad"      => 70,
];

$persona["nombre"] = "pedro";
echo "<br>";

$persona["telefono"] = "123456789";
echo "<br>";

echo "<pre>";
print_r($persona);
echo "</pre>";

//investigar como ordenar los arreglos y eliminar elementosde un arreglo