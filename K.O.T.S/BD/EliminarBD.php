<?php
include 'Conexion.php';

$sql = "DROP DATABASE IF EXISTS Usuarios";

if ($conn->query($sql) === TRUE) {
echo "
La base de datos 'Usuarios' ha sido eliminada correctamente";
} else {
echo "Error al borrar la base de datos: " . $conn->error;
}
?>