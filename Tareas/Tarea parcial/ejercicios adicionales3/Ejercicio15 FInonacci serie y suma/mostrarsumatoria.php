<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Sumatoria</title>
</head>
<body>
    <h1>Mostrar Sumatoria</h1>

    <?php
    if (isset($_GET['n'])) {
        $n = intval($_GET['n']);
        include 'funciones.php'; // Incluimos el archivo funciones.php
        $sumatoria = fibonacci($n); // Llamamos a la función fibonacci para calcular la sumatoria

        echo "La sumatoria para n = $n es: $sumatoria";
    } else {
        echo "Ingrese un valor válido para n.";
    }
    ?>

</body>
</html>
