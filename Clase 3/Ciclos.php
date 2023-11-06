<?php

//while

$numero = 0;
while($numero <= 10){
    echo "<p> $numero </p>";
    $numero++; //numero + 1
}
echo "<br>";
//do while

$numero = 0;
do{
    echo "<p> $numero </p>";
    $numero++;
}while($numero > 5);

$numero_l = 1;
echo "<ul>";
do{
    echo "<p><li>$numero_l</li></p>"; //lista en html - si o si va con echo el html
    $numero_l++;
}while($numero_l<=15);
echo "</ul>";

//for
for($i = 0; $i < 10; $i++){
    echo "el numero es: $i <br>";
}
// escribir una tabla de multiplicar del 1 al 10 formato tabla <table border = '1'></table>

echo "<ul>";
for($num_for=1; $num_for <= 15; $num_for++){
    echo "<p><li>$num_for</li></p>";
}
echo "</ul>";

//foreach
/*
foreach($array as $array){
    (codigo)
}
*/
$array= array("pera", "melor", 1, 2, 3, array(1, 2, 3));
$array_2= [1,2,3,4,5,6];
print_r($array);
echo "<br>";
echo $array[1];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$colores = ['rojo', 'verde', 'amarillo'];
foreach($colores as $color){
    echo "<br>";
    echo "$color";
}
echo "<br>";
echo "<br>";
echo "<br>";

$nombres = ['juan', 'gabriel', 'esteban', 'fernando', 'javier'];
foreach($nombres as $nombre){
    echo "<br>";
    echo "Hola $nombre";
}

//if

$edad = 28;
$nombre_if = "Juan";
if($edad >= 25 and $nombre == "Pepito"){
    echo "<br>";
    echo "$nombre_if es mayor de edad y es Pepito";
    echo "<br>";
}//elseif
else{
    echo "<br>";
    echo "$nombre_if no es mayor de edad o no es Pepito";
}

$num = -50;
if($num > 0){
    echo "<br>";
    echo "$num es mayor a 0";
}elseif($num == 0){
    echo "<br>";
    echo "$num es igual a 0";
}
else{
    echo "<br>";
    echo "$num es menor a 0";
}