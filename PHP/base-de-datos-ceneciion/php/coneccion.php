<?php
/*
$loc = "127.0.0.1";
$usuario = "root";
$base = "registro";

$enlace =  mysqli_connect($loc, $usuario, '');
if (!$enlace) {
    die('No pudo conectarse: ' . mysqli_error());
}
echo 'Conectado satisfactoriamente';
mysqli_close($enlace);
*/





$loc = "127.0.0.1";
$usuario = "root";
$base = "registro";

$enlace = new mysqli($loc, $usuario, "", $base);
/*if ($enlace->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $enlace->connect_errno . ") " . $enlace->connect_error;
}

echo $enlace->host_info . "\n";*/

