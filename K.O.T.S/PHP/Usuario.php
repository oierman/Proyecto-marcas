<?php
session_start();
$usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Invitado';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuario</title>
        <link rel="stylesheet" href="../estilosCSS/Usuario.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <nav class="navbar">
            <div class="logo">
                <a href="../KOTS.html">
                    <img src="../Fotos/KOTS_logo.png" width="200px" alt="KOTS Logo">
                </a>
            </div>
        </nav>
        <div class="imagenes">
            <figure class="foto5">
                <img src="../Fotos/KOTS_foto5.png" alt="Foto 5">
            </figure>
            <figure class="foto6">
                <img src="../Fotos/KOTS_foto6.png" alt="Foto 6">
            </figure>
            <figure class="foto7">
                <img src="../Fotos/KOTS_foto7.png" alt="Foto 7">
            </figure>
        </div>
        <h1>Bienvenido a King Of The Streets, <?php echo htmlspecialchars($usuario); ?> 👋</h1>

        <button onclick="carrarsesion()"> Cerrar sesion</button>
        <script src="../JS/Boton.js"></script>
    </body>
</html>