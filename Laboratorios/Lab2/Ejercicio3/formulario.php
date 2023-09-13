<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Damas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css"> <!-- Vincula el archivo CSS externo -->
</head>
<body>
    <div class="contenedor">
        <h1>Tablero de Damas</h1>
        <div class="Margenes">
            <?php
            // Variables para filas y columnas
            $filas = isset($_POST["filas"]) ? intval($_POST["filas"]) : 6;
            $columnas = isset($_POST["columnas"]) ? intval($_POST["columnas"]) : 5;
            $color = "azul";
            
            // Formulario para editar filas y columnas
            echo "<form method='post'>";
            echo "<label for='filas'>Filas:</label>";
            echo "<input type='number' name='filas' id='filas' value='$filas'>";
            echo "<label for='columnas'>Columnas:</label>";
            echo "<input type='number' name='columnas' id='columnas' value='$columnas'>";
            echo "<input type='submit' value='Actualizar'>";
            echo "</form>";

            echo "<div>";
            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    $casillaClase = ($i + $j) % 2 == 0 ? "casilla $color" : "casilla";
                    echo "<div class='$casillaClase'></div>";
                }
                echo "<br>";
            }
            echo "</div>";
            ?>
        </div>
    </div>
</body>
</html>
