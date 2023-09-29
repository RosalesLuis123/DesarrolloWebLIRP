<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);

        // Crear una cookie con el número
        setcookie('numero_cookie', $numero, time() + 3600, '/'); // Cookie válida por 1 hora

        // Redirigir al usuario al menú de operaciones
        header('Location: menu.php');
        exit();
    }
}
?>
