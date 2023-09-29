<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Área de Triángulo</title>
</head>
<body>
    <h1>Área de Triángulo</h1>

    <?php
    if (isset($_GET['base']) && isset($_GET['altura'])) {
        $base = $_GET['base'];
        $altura = $_GET['altura'];

        $area = ($base * $altura) / 2;
    

        echo "<p>Base (b): $base</p>";
        echo "<p>Altura (h): $altura</p>";
        echo "<p>Área del triángulo: $area</p>";
    } else {
        echo "<p>Por favor, ingresa valores para la base (b) y la altura (h).</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
