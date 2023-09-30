<?php
session_start();

if (!isset($_SESSION['n']) || !isset($_SESSION['vector1']) || !isset($_SESSION['vector2'])) {
    header('Location: index.php');
    exit();
}

$n = $_SESSION['n'];
$vector1 = $_SESSION['vector1'];
$vector2 = $_SESSION['vector2'];

$resultado = null; // Inicializar $resultado como nulo

if (isset($_POST['submit_step3'])) {
    $resultado = 0; // Inicializar $resultado solo si se envía el formulario

    for ($i = 0; $i < $n; $i++) {
        $resultado += $vector1[$i] * $vector2[$i];
    }

    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación de Vectores - Paso 3</title>
</head>
<body>
    <h1>Paso 3: Multiplicación de Vectores</h1>
    <form action="" method="POST">
        <h2>Resultado de la multiplicación:</h2>
        <p>Vector 1: [<?= implode(", ", $vector1) ?>]</p>
        <p>Vector 2: [<?= implode(", ", $vector2) ?>]</p>
        <?php if ($resultado !== null) { // Mostrar el resultado solo si está definido ?>
            <p>El resultado de la multiplicación es: <?= $resultado ?></p>
        <?php } ?>
        <input type="submit" name="submit_step3" value="Siguiente">
    </form>
</body>
</html>
