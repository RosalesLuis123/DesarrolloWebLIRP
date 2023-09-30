<?php
session_start();

if (isset($_POST['submit_step1'])) {
    $n = $_POST['n'];
    $_SESSION['n'] = $n;
    header('Location: introducir_valores.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación de Vectores - Paso 1</title>
</head>
<body>
    <h1>Paso 1: Tamaño del Vector</h1>
    <form action="" method="POST">
        Ingrese el tamaño del vector (n): <input type="number" name="n" required>
        <input type="submit" name="submit_step1" value="Siguiente">
    </form>
</body>
</html>
