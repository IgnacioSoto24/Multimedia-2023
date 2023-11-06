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