<?php
include 'Conexion.php';
$usuario = $_POST['Usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$movil = $_POST['movil'];
$email = $_POST['email'];
$contraseña = $_POST['Contraseña']; 


$sql = "INSERT INTO usuario (usuario, nombre, apellido, movil, email, contrasenia) 
        VALUES (, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Error al preparar la consulta: " . $conn->error);
}


$stmt->bind_param("ssssss", $usuario, $nombre, $apellido, $movil, $email, $contrasena);


if ($stmt->execute()) {
    echo "Registro exitoso.";
} else {
    echo "Error al registrar: " . $stmt->error;
}


$stmt->close();
$conn->close();
?>
?>
