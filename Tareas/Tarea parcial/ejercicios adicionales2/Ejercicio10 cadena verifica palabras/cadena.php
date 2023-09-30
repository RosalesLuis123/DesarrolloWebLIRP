<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php
    if (isset($_POST['cadena'])) {
        $cadena = $_POST['cadena'];
        
        echo "<p>La cadena ingresada es: $cadena</p>";
        
        // Verificar si la cadena contiene la palabra "SCRIPT"
        if (stripos($cadena, 'SCRIPT') !== false) {
            echo "<p>Tiene la palabra 'SCRIPT'.</p>";
            // Eliminar la palabra "SCRIPT" de la cadena
            $cadenaSinScript = str_ireplace('SCRIPT', '', $cadena);
            echo "<p>Cadena sin 'SCRIPT': $cadenaSinScript</p>";
        } else {
            echo "<p>No contiene la palabra 'SCRIPT'.</p>";
        }
    } else {
        echo "<p>No se proporcionó una cadena válida.</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
