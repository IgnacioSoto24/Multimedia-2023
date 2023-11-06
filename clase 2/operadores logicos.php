<?php  
$es_estudiante = true;
$trabaja = false;
//and - &&
//$es_estudiante && $trabaja; //false
//$es_estudiante && $trabaja; 

//or - ||
//$es_estudiante or $trabaja; //true
//$es_estudiante || $trabaja;
var_dump($es_estudiante || $trabaja);
echo "<br>";
//not - !
//!$es_estudiant //false

//relacionales
// == igual
// === identico
// < menor
// <= menor igual
// > mayor
// >= mayor igual
// != distinto

$num_1 = 5;
$num_2 = 2;

var_dump($num_1 == $num_2);
echo "<br>";
var_dump($num_1 === "5");
echo "<br>";
var_dump($num_1 !== "5");
echo "<br>";
var_dump($num_1 != "5");
echo "<br>";

//averiguar operador nave espacial
// <=>