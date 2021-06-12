<?php
include_once 'conexion.php';



//Leer
//$sql_le = "SELECT * FROM `dat-reg`";
$sql_le = "SELECT * FROM 'dat-reg'";

$gsent = $mbd->prepare($sql_le);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);

//Agregar
if ($_POST) {
     $login = $_POST['usuario'];
     $email = $_POST['correo'];
     $pass = $_POST['contraseña01'];
     $re_pass = $_POST['contraseña02'];

     $sql_agre = "INSERT INTO dat-reg (username, email, pass, re_pass) VALUES (?,?,?,?)";
     $sen_agre = $mbd->prepare($sql_agre);
     $sen_agre->execute(array($login,$email,$pass,$re_pass));

     //echo "agregado";
     header('location:registro.php');
}

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>registro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/registro.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="shortcut icon" href="img/icon-page.png">
    </head>

    <body>

        <!--Barra de navegacion de la pagina-->
        <div id="navflo_00">
            <a href="index.html" id="h_0">Inicio</a>
            <!--<a href="registro.html" id="h_1">Registrarse</a>-->
            <a href="sign-in.html" id="h_2">Iniciar sesión</a>
            <a href="php/conexion.php" id="h_3">conexion a la base de datos</a>
        </div>
        <!--Barrad del titulo-->
        <div class="contenedor-texto">
            <h1 class="text_00">
                ARMAS DE FUEGO
            </h1>
        </div>

        <!--Formulario de la pagina de registro-->
        <div class="content">
            <div class="formu">
                <p class="text-sub-1">
                    Crea tu cuenta
                </p>
                <form method="post">
                    <div class="inputs">
                        <p>
                            <p>
                                <strong>Login</strong>
                            </p>
                            <input type="text" name="usuario" placeholder="Usuername" required>
                        </p>
                        <p>
                            <p>
                                <strong>Email</strong>
                            </p>
                            <input type="email" name="correo" placeholder="Email@email.com" required>
                        </p>
                        <p>
                            <p>
                                <strong>Password</strong>
                            </p>
                            <input type="password" name="contraseña01" placeholder="●●●●●●●●" required>
                        </p>
                        <p>
                            <p>
                                <strong>Confirm Password</strong>
                            </p>
                            <input type="password" name="contraseña02" placeholder="●●●●●●●●" required>
                        </p>
                        <p>
                            <label><input type="checkbox" name="chk2" value="2" required>Acepta los términos y condiciones</label>

                        </p>
                        <p class="btn">
                            <input type="submit" name="enviar" value="Registrarse">
                        </p>
                    </div>
                </formethod=>
            </div>
        </div>


        <center>Echo por: Asael Hernández Bautista</center>



    <div>
         <?php 
     
     foreach ($resultado as $dato):?>

          <p class="text_01">
               <?php
               echo $dato['username'];
               ?>
          </p>
          <p>
               <?php
echo $dato['email'];
               ?>
          </p>

<?php
     endforeach
     
     ?>
    </div>
    </body>

    </html>