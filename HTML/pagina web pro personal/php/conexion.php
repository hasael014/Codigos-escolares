<?php

//$lk = 12;
/*
$conexion=mysqli_connect("localhost", "root", "", "datos_personales");
if(!$conexion){
    echo 'Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la base de datos';
}*/
$user = "root";

$mbd = new PDO('mysql:host=localhost;dbname=datos_personales', $user);
/*if(!$mbd){
    echo 'Error al conectar a la base de datos';
}
else{
    echo 'Conectado a la base de datos';
}*/