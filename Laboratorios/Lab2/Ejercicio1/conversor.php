<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
  
    <div class="contenido bg_gris Margenes">
        <div class="contenido2"> 
    <h1>Resultado de la Conversión</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distancia = $_POST["distancia"];
        $unidad_inicial = $_POST["unidad_inicial"];
        $unidad_final = $_POST["unidad_final"];
        
        $conversion = 0;
        $resultado = 0;
        
        if ($unidad_inicial == $unidad_final) {
            $resultado = $distancia;
        } else {
            switch ($unidad_inicial) {
                case "mm":
                    $conversion = 1;
                    break;
                case "dm":
                    $conversion = 10;
                    break;
                case "cm":
                    $conversion = 100;
                    break;
                case "m":
                    $conversion = 1000;
                    break;
                case "km":
                    $conversion = 1000000;
                    break;
                default:
                    echo "<p>Unidad inicial no válida.</p>";
                    break;
            }
            
            if ($conversion != 0) {
                switch ($unidad_final) {
                    case "mm":
                        $resultado = $distancia * $conversion;
                        break;
                    case "dm":
                        $resultado = $distancia * ($conversion / 10);
                        break;
                    case "cm":
                        $resultado = $distancia * ($conversion / 100);
                        break;
                    case "m":
                        $resultado = $distancia * ($conversion / 1000);
                        break;
                    case "km":
                        $resultado = $distancia * ($conversion / 1000000);
                        break;
                    default:
                        echo "<p>Unidad final no válida.</p>";
                        break;
                }
            }
        }
        if ($resultado != 0) {
            
            echo "<p>$distancia $unidad_inicial son aproximadamente $resultado $unidad_final.</p>";
        }

    }
    ?>
    
    <p><a href="formulario.html">Volver al conversor</a></p>
</div>
</div>
</body>
</html>
