<?php

// Funciones

function saludar_persona($nombre = "Anonimo"){
    echo "Hola $nombre";
}

saludar_persona("Juan");
saludar_persona("Maria");

// Funciones con retorno
function sumar($a, $b){
    $resultado = $a + $b;
    return $resultado;
}

$result = sumar(5, 10);
echo $result;


saludar_persona();