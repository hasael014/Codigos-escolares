<?php

$bddatos = 'mysql:host=localhost;dbname=datos_personales';
$user = 'root';
$pass = 'root';


try {
    $mbd = new PDO($bddatos , $user, $pass);
    
echo "Conectado a la base de datos!!";


    }
 catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}