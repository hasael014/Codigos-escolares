<?php
include 'coneccion.php';

$pass = $_POST['clave'];
$id = $_POST['id'];

$sql = "UPDATE registrodeform SET Clave='$pass' WHERE Id=$id";

if ($enlace->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $enlace->error;
}

header('location:actualizacion-de-datos.html');

$enlace->close();