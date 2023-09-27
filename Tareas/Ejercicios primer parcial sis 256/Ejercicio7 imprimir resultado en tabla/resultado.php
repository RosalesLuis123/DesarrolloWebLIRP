<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            background-color: green;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: black;
        }
    </style>
</head>
<body>
    <h1>Resultado de la Suma</h1>

    <?php
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        
        // Calcular la suma
        $resultado = $numero1 + $numero2;

        // Mostrar el resultado en una tabla de 1x5
        echo "<table>";
        echo "<tr>";
        echo "<td>$numero1</td>";
        echo "<td>+</td>";
        echo "<td>$numero2</td>";
        echo "<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
        echo "</table>";
    } else {
        echo "<p>No se proporcionaron datos válidos.</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
