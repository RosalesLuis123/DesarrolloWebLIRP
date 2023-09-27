<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicación</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid gray;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: gray;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Tabla de Multiplicación</h1>

    <?php
    if (isset($_POST['filas']) && isset($_POST['columnas'])) {
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        
        echo "<table>";
        for ($i = 0; $i <= $filas; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $columnas; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<th></th>";
                } elseif ($i == 0) {
                    echo "<th>$j</th>";
                } elseif ($j == 0) {
                    echo "<th>$i</th>";
                } else {
                    $producto = $i * $j;
                    echo "<td>$producto</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No se proporcionaron datos válidos.</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
