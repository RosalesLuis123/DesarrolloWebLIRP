<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hotel Tarabuco</title>
    <!-- Agrega tus enlaces a las bibliotecas de jQuery y tu archivo JavaScript -->
</head>
<body>
    <h1>Bienvenido al Hotel Tarabuco</h1>
    <div id="userInfo">
        Usuario: <span id="username"></span><br>
        Nivel: <span id="userLevel"></span>
    </div>

    <ul>
        <li><a href="#" onclick="showPresentation()">Presentación</a></li>
        <li><a href="#" onclick="showRooms()">Habitaciones</a></li>
        <?php
        // Mostrar la opción de reservas solo si el usuario es administrador
        if ($nivelUsuario == 1) {
            echo '<li><a href="#" onclick="showReservations()">Reservas</a></li>';
        }
        ?>
        <li><a href="#" onclick="changeColor()">Cambiar Color</a></li>
        <li><a href="#" onclick="changeUser()">Cambiar Usuario</a></li>
        <li><a href="#" onclick="logout()">Salir</a></li>
    </ul>

    <div id="content"></div>

    <script src="script.js"></script>
</body>
</html>
