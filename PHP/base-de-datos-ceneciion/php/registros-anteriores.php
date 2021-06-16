<?php
include 'coneccion.php';

$id = $_POST['id'];
	
$sql = "DELETE FROM registrodeform WHERE id=$id";

if ($enlace->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $enlace->error;
}
header('location:../eliminar-datos.html');
$enlace->close();