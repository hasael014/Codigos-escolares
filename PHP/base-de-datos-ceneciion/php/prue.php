<?php

include 'coneccion.php';

if (!$enlace) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, Nombre, Apellidos,Correo,Fecha_Registro FROM registrodeform ORDER BY id";
$result = mysqli_query($enlace, $sql);

echo "<head>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
</head>

<table class='table table-striped'>

    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>Correo</th>
            <th>FECHA DE REGISTRO</th>
            <!--<th>HABITACION</th>-->
        </tr>
    </thead>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
     echo "<tr><th>" . $row['id']; "</th>";
     echo "<th>" . $row['Nombre']; "</th>";
     echo "<th>" . $row['Apellidos']; "</th>";
     echo "<th>" . $row['Correo']; "</th>";
     echo "<th>" . $row['Fecha_Registro']; "</th>";
     echo "</tr>";
/*<td><?php /* $row['telefono'] ?></td>
<td><?php $row['dias'] ?></td>
<td><?php $row['habitaciones'] ?></td>*/


//2qecho "ID: " . $row['id']. "- Nombre: " . $row['Nombre']. " " . $row['Apellidos']. "<br>";
}
} else {
echo "0 results";
}

mysqli_close($enlace);



/*
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
}
} else {
echo "0 results";
}

$conn->close();
*/