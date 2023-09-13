<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Mayores</title>
    <link rel="stylesheet" href="estilos.css">

</head>
<body>
  
    <div class="contenedor">
    <h1 style="text-align: center;">Eliminar Mayores</h1>
    <?php
    require_once('rmayores.php');
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["n"];
        $mayor = $_POST["mayor"];
        
        $arreglo = array();
        
        for ($i = 0; $i < $n; $i++) {
            $arreglo[] = rand(1, 100); 
        }
        
        echo "<p>Arreglo original: " . implode(", ", $arreglo) . "</p>";
        
        $resultado = eliminarMayores($arreglo, $mayor);
        
        echo "<p>Arreglo después de eliminar los mayores que $mayor: " . implode(", ", $resultado) . "</p>";
    }
    ?>
    
    <p><a href="formulario-n.html">Volver al formulario</a></p>
</div>
</body>
</html>
