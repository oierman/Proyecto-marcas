<?php
session_start(); 
$usuarioIngresado = $_POST['usuario'];
$contrasenaIngresada = $_POST['contrasena'];

$archivo = '../Registro.txt';
$loginExitoso = false;

if (file_exists($archivo)) {
    $lineas = file($archivo);

    foreach ($lineas as $linea) {
        $linea = trim($linea);
        echo $linea;

        if (preg_match('/Usuario: (.*?) \| Contraseña: (.*)/', $linea, $coincidencias)) {
            $usuario = $coincidencias[1];
            $contrasena = $coincidencias[2];

            if ($usuario === $usuarioIngresado && $contrasena === $contrasenaIngresada) {
                $_SESSION['usuario'] = $usuario; 
                $loginExitoso = true;
                break;
            }
        }
    }
}

if ($loginExitoso) {
    header('Location: Usuario.php');
    exit;
} else {
    echo " Usuario o contraseña incorrectos.";
}
?>
