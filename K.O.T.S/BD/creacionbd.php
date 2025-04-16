<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql ="create database Usuarios;";
if ($conn->query($sql) === TRUE) {
    echo "<br>Base de datos creada exitosamente";
} else {
    echo "Error al crear la base de datos: " . $conn->error;
}
$database = "usuarios";
$database = mysqli_select_db($conn, $database) or die("No se ha podido conectar con la base de datos"); 

$sql = "CREATE TABLE usuario (
    Codigo_Usuario int auto_increment primary key ,
    Contrasena varchar(30) Not null,
    Usuario varchar(30) Not null,
    Nombre varchar(30) Not null,
    Apellido varchar(30) Not null,
    Movil int Not Null,
    Email varchar(60) Not null,
    Fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

$sql1 = "CREATE TABLE Informacion (
    Codigo int auto_increment primary key ,
    Nombre varchar(30) Not null,
    Apellido varchar(30) Not null,
    Movil int Not Null,
    Email varchar(60) Not null,
    Mensaje varchar (300) not null,
    Fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

if ($conn->query($sql) === TRUE) {
    echo "<br>Tabla 'usuario' creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}
if ($conn->query($sql1) === TRUE) {
    echo "<br>Tabla 'Informacion' creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}
?>