<?php
session_start();

if (!isset($_SESSION['n'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['submit_step2'])) {
    $n = $_SESSION['n'];
    $vector1 = [];
    $vector2 = [];

    for ($i = 0; $i < $n; $i++) {
        $vector1[] = $_POST['vector1'][$i];
        $vector2[] = $_POST['vector2'][$i];
    }

    $_SESSION['vector1'] = $vector1;
    $_SESSION['vector2'] = $vector2;
    header('Location: multiplicar.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación de Vectores - Paso 2</title>
</head>
<body>
    <h1>Paso 2: Introducir Valores</h1>
    <form action="" method="POST">
        <h2>Valores del Vector 1:</h2>
        <?php
        $n = $_SESSION['n'];
        for ($i = 0; $i < $n; $i++) {
            echo "Valor " . ($i + 1) . ": <input type='number' name='vector1[]' required><br>";
        }
        ?>

        <h2>Valores del Vector 2:</h2>
        <?php
        for ($i = 0; $i < $n; $i++) {
            echo "Valor " . ($i + 1) . ": <input type='number' name='vector2[]' required><br>";
        }
        ?>

        <br>
        <input type="submit" name="submit_step2" value="Siguiente">
    </form>
</body>
</html>
