<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabla con Colores Intercalados</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
            width: 300px; 
        }
        td {
            border: 1px solid gray;
            padding: 10px; 
            text-align: center;
        }
        .rojo {
            background-color: red;
            color: white;
        }
        .amarillo {
            background-color: yellow;
        }
        .verde {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Tabla con Colores Intercalados</h1>

    <?php
    if (isset($_POST['filas']) && isset($_POST['columnas'])) {
        $filas = $_POST['filas'];
        $columnas = $_POST['columnas'];
        
        echo "<table>";
        for ($i = 1; $i <= $filas; $i++) {
            $clase = '';
            
            
            if ($i % 3 == 1) {
                $clase = 'rojo';
            } elseif ($i % 3 == 2) {
                $clase = 'amarillo';
            } else {
                $clase = 'verde';
            }
            
            echo "<tr class='$clase'>";
            for ($j = 1; $j <= $columnas; $j++) {
                echo "<td></td>";
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
