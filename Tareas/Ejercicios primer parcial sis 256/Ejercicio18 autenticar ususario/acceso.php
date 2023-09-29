<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: formulario.html');
    exit();
}

$usuario = $_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Acceso</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $usuario; ?></h1>
    
    <?php
    if ($usuario === 'admin') {
        // Mostrar el menú para el usuario administrador
        echo '<ul>';
        echo '<li><a href="crear.php">Crear</a></li>';
        echo '<li><a hrsef="listar.php">Listar</a></li>';
        echo '<li><a href="borrar.php">Borrar</a></li>';
        echo '<li><a href="salir.php">Salir</a></li>';
        echo '</ul>';
    } else {
        // Mostrar el menú para otros usuarios
        echo '<ul>';
        echo '<li><a href="listar.php">Listar</a></li>';
        echo '</ul>';
    }
    ?>

</body>
</html>
