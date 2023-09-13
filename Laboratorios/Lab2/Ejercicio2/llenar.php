<!DOCTYPE html>
<html>
<head>
    <title>Llenar Arreglo</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
    <div class="contenedor">
    <h1 style="text-align: center;">Llenar Arreglo</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        $numero = $_POST["numero"];
        
        $arreglo = array();
        
        for ($i = 0; $i < $n; $i++) {
            $arreglo[] = $numero;
        }
        
        echo "<p>Arreglo llenado con $numero, $n veces.</p>";
        
        echo "<form action='eliminar.php' method='post'>";
        echo "<input type='hidden' name='n' value='$n'>";
        echo "<input type='hidden' name='mayor' value='$numero'>";
        echo "<input type='submit' value='Eliminar Mayores'>";
        echo "</form>";
        
    }
    
    ?>
    <div class="contenedor">
    <p><a href="formulario-n.html">Volver al formulario</a></p>
</div>
</div>
</body>
</html>
