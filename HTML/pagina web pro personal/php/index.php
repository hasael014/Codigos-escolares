<?php
include_once 'conexion.php';



//Leer
$sql_le = "SELECT * FROM `dat-reg`";
//$sql_le = 'Select * form dat-reg';

$gsent = $mbd->prepare($sql_le);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

/*Agregar
if ($_POST) {
     $login = $_POST['usuario'];
     $email = $_POST['correo'];
     $pass = $_POST['contraseña01'];
     $re_pass = $_POST['contraseña02'];

     $sql_agre = 'INSERT INTO dat-reg (login,email,pass,re_pass) VALUES (?,?,?,?)';
     $sen_agre = $mbd->prepare($sql_agre);
     $sen_agre->execute(array($login,$email,$pass,$re_pass));

     header('location:index.php');
}*/

?>

<!DOCTYPE html>
<html lang="es">
     <head>
          <title>ES</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="../css/estilos.css" rel="stylesheet">
     </head>
     <body>
     <?php 
     
     foreach ($resultado as $dato):?>

          <p class="text_00">
               <?php
               echo $dato['username'];
               ?>
          </p>
          <p class="text_00">
               <?php
echo $dato['email'];
               ?>
          </p>

<?php
     endforeach
     
     ?>
     </body>
</html>