<?php
if (isset($_POST['n'])) {
    $n = intval($_POST['n']);
    
    echo "<h1>Introduzca los valores</h1>";
    echo "<form action='multiplicacion.php' method='POST'>";
    
    for ($i = 1; $i <= $n; $i++) {
        echo "<label for='valor$i'>Valor $i:</label>";
        echo "<input type='number' name='valor$i' required><br>";
    }
    
    echo "<input type='hidden' name='n' value='$n'>";
    echo "<input type='submit' value='Calcular'>";
    echo "</form>";
} else {
    echo "Ingrese un valor válido para n.";
}
?>
