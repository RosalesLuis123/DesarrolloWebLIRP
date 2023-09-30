<?php
function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $opcion = $_POST['opcion'];

    if ($opcion === 'fibonacci') {
        $resultado = fibonacci($numero);
    } elseif ($opcion === 'factorial') {
        $resultado = factorial($numero);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci y Factorial</title>
</head>
<body>
    <h1>Calculadora de Fibonacci y Factorial</h1>
    <form method="post">
        <label for="numero">Ingrese un número:</label>
        <input type="number" name="numero" required>
        <br>
        <label>Opciones:</label>
        <input type="radio" name="opcion" value="fibonacci" required>Fibonacci
        <input type="radio" name="opcion" value="factorial">Factorial
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if (isset($resultado)) {
        echo "<h2>Resultado:</h2>";
        echo $resultado;
    }
    ?>

</body>
</html>
