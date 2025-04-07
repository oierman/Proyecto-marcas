<?php
include '../BD/Conexion.php';
$database = "usuarios";
$database = mysqli_select_db($conn, $database) or die ("No se puede conectar");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$movil = $_POST['movil'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];



$sql = "INSERT INTO Informacion ( nombre, apellido, movil, email, mensaje) 
        VALUES ( '$nombre', '$apellido', '$movil', '$email', '$mensaje')";


if ($conn->query($sql) === true ) {
    echo "<br>Registro exitoso.";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
