<!DOCTYPE html>
<html lang="en">
     <head>
          <title>RESULTADO DE EL ENVÍO</title>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/style.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
     </head>
     <body>
          <center>
               <br>
               <br>
               <br>
               <?php
               
               $nombre = $_POST['nombre'];
               $edad = $_POST['edad'];

               echo "<H2>La edad que ingresaste es $edad</H2><br>";
               echo "<H2>Y el nombre que ingresaste es $nombre</H2>";
               ?>
               <br>
               <br>
               <form method="post" action="INDEX.HTML">
                    <input type="submit" name="regresar" value="Regresar">
               </form>
          </center>
     </body>
</html>