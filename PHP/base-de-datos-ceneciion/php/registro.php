<?php
include 'coneccion.php';
//SE RECIBEN LOS DATOS Y SON ALMACENADOS EN LAS VARIABLES
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$telefono=$_POST["telefono"];

//Registrar Datos
$insertar="INSERT INTO registrodeform(Nombre, Apellidos, Correo, Usuario, Clave, Telefono) VALUES ('$nombre','$apellidos','$correo', '$usuario','$clave','$telefono')";
$verificar_usuario=mysqli_query($enlace, "SELECT * FROM registrodeform WHERE Usuario ='$usuario'");
if(mysqli_num_rows($verificar_usuario)>0)
{
    echo '<script>
    alert ("El usuario ya esta registrado");
    windows.history.go(-1);
    </script>';
    exit;
}

$verificar_correo=mysqli_query($enlace, "SELECT * FROM registrodeform WHERE Correo ='$correo'");

if(mysqli_num_rows($verificar_correo)>0)
{
    echo '<script>
    alert ("El correo ya esta registrado");
    windows.history.go(-1);
    </script>';
    exit;
}
$verificar_usuario=mysqli_query($enlace, "SELECT * FROM registrodeform WHERE Usuario ='$usuario'");
//Ejecutar el registro de los datos
$resultado=mysqli_query($enlace, $insertar);
if(!$resultado){
    echo 'Error al Registrarse';
}
else
{
    echo '<script>
    alert ("Usuario Registrado Exitosamente");
    windows.history.go(-1);
    </script>';
}


//Cerrar la conexion
mysqli_close ($enlace);

header('location:../index.html');
?>
