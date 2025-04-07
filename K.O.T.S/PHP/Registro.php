<?php
include '../BD/Conexion.php';
$database = "usuarios";
$database = mysqli_select_db($conn, $database) or die ("No se puede conectar");
$usuario = $_POST['Usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$movil = $_POST['movil'];
$email = $_POST['email'];
$contrasena = $_POST['Contrasena']; 


$sql = "INSERT INTO usuario (usuario, nombre, apellido, movil, email, contrasena) 
        VALUES ('$usuario', '$nombre', '$apellido', '$movil', '$email', '$contrasena')";


if ($conn->query($sql) === true ) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $conn->error;
}

$conn->close();
?>
