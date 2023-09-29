<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Multiplicación</title>
</head>
<body>
    <h1>Resultado de la Multiplicación</h1>

    <?php
    if (isset($_POST['n'])) {
        $n = intval($_POST['n']);
        $resultado = 1;

        for ($i = 1; $i <= $n; $i++) {
            if (isset($_POST["valor$i"])) {
                $valor = intval($_POST["valor$i"]);
                $resultado *= $valor;
            }
        }

        echo "La multiplicación de los valores es: $resultado";
    } else {
        echo "No se proporcionó un valor válido para n.";
    }
    ?>

</body>
</html>
