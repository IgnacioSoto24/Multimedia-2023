<?php

// Incluye la biblioteca de PHP QR Code**
include 'path/to/qrlib.php';

// Contenido para el código QR
$contenido = "Este es un código QR";

// Tamaño del código QR
$tamanio = 10;

// Configura la calidad de la imagen
$calidad = 'H';

// Ruta para guardar la imagen del código QR
$rutaImagen = 'C:\Users\Nacho\Downloads\codigo-qr-1024x1024-1.png';

// Genera el código QR
QRcode::png($contenido, $rutaImagen, $calidad, $tamanio);

// Muestra la imagen del código QR
echo '<h2>Código QR de ejemplo:</h2>';
echo '<img src="' . $rutaImagen . '" alt="Código QR">';