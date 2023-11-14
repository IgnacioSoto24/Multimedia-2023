<?php

$productos=[
    [
        "nombre" => "monitor",
        "precio" => 150,
        "unidades_vendidas" => 3
    ],

    [
        "nombre" => "teclado",
        "precio" => 30,
        "unidades_vendidas" => 15
    ],

    [
        "nombre" => "disco",
        "precio" => 45,
        "unidades_vendidas" => 7
    ],
];

$precio_total = 0;

foreach ($productos as $producto){
    $precio_total += $producto["precio"] * $producto["unidades_vendidas"];
}

echo "El precio total es de $precio_total dolares";