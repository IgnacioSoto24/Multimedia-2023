<?php

//$_SERVER es una variable super global, que contiene informacion sobre encabezados, rutas y ubicaciones de script

echo $_SERVER["REQUEST_METHOD"];
echo "<br>";

echo $_SERVER["SERVER_NAME"];
echo "<br>";

echo $_SERVER["PHP_SELF"];
echo "<br>";

echo $_SERVER["HTTP_USER_AGENT"];
echo "<br>";

echo $_SERVER["SERVER_PORT"];
echo "<br>";

echo $_SERVER["REMOTE_ADDR"];
echo "<br>";

echo $_SERVER["SERVER_SOFTWARE"];
echo "<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";