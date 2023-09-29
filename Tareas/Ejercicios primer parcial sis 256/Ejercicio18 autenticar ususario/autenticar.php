<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Verificar las credenciales (en este ejemplo, usuario=admin y contraseña=admin)
    if ($usuario === 'admin' && $contrasena === 'admin') {
        $_SESSION['usuario'] = 'admin';
    } else {
        $_SESSION['usuario'] = 'usuario';
    }
}

header('Location: acceso.php');
?>
