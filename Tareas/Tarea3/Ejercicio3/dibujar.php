<?php
if (isset($_GET['tamano'])) {
    $tamano = intval($_GET['tamano']);
    if ($tamano <= 0) {
        echo "El tamaño debe ser un número positivo.";
        exit;
    }

    echo "<table border='1'>";
    for ($fila = 1; $fila <= $tamano; $fila++) {
        echo "<tr>";
        for ($columna = 1; $columna <= $tamano; $columna++) {
            $esBlanco = ($fila + $columna) % 2 == 0;
            $colorCelda = $esBlanco ? 'white' : 'black';
            echo "<td style='width: 40px; height: 40px; background-color: $colorCelda;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
