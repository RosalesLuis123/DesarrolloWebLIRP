<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];

    // Crear una cookie con el número ingresado
    setcookie('numero_cookie', $numero, time() + 3600); // Cookie válida por 1 hora

    // Contar las veces que se accede al menú
    if (isset($_COOKIE['contador'])) {
        $contador = $_COOKIE['contador'] + 1;
    } else {
        $contador = 1;
    }
    setcookie('contador', $contador, time() + 3600); // Cookie válida por 1 hora

    // Mostrar el menú
    echo "<h1>Menú</h1>";
    echo "<p>Veces que se accedió al menú: $contador</p>";
    echo "<ul>";
    echo "<li><a href='sumatoria.php'>Sumatoria</a></li>";
    echo "<li><a href='factorial.php'>Factorial</a></li>";
    echo "<li><a href='fibonacci.php'>Fibonacci</a></li>";
    echo "<li><a href='dividir.php'>Dividir</a></li>";
    echo "</ul>";
} else {
    echo "Ingrese un número válido.";
}
?>
