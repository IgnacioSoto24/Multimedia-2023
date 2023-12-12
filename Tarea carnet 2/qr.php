<?php

require 'phpqrcode/qrlib.php';
$dir = 'temp/';
$filename = $dir. 'test.png';
$tamanio = 10;
$level = 'M';
$framesize = 3;
$contenido = '';
QRcode::png($contenido, $filename, $level, $tamanio, $framesize);
echo'<img src="' .$filename.'"/>';
$conexion->close();
?>