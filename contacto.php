<!DOCTYPE html>
<html lang="en">
     <head>
          <title></title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/style.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     </head>
     <body>
          
     <?php
$nombre = $_POST['nombre'];


if ($nombre < -1)
{
     echo ("El número $nombre es negativo");
}
if ($nombre >=1){
     echo ("El número $nombre es positivo");
}



?>
<form name="nomphp" method="POST" action="index.html">
     <input type="submit" value="regresar">
     </form>

     </body>
</html>