<?php
if (isset($_COOKIE['numero_cookie'])) {
    $numero = $_COOKIE['numero_cookie'];
    $sumatoria = 0;
    for ($i = 1; $i <= $numero; $i++) {
        $sumatoria += $i;
    }
    echo "<h1>Sumatoria de $numero:</h1>";
    echo "El resultado es: $sumatoria";
} else {
    echo "No se ha proporcionado un número válido.";
}
?>
