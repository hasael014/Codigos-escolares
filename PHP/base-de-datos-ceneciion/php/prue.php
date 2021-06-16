<?php

include 'coneccion.php';

if (!$enlace) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, Nombre, Apellidos FROM registrodeform ORDER BY Apellidos";
$result = mysqli_query($enlace, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['id']. "- Nombre: " . $row['Nombre']. " " . $row['Apellidos']. "<br>";
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