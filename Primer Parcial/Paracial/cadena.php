<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    if (isset($_POST['cadena1']) && isset($_POST['cadena2'])) {
        $cadena1 = $_POST['cadena1'];
        $cadena2 = $_POST['cadena2'];
      
        if (strpos($cadena1, $cadena2) !== false) {
           
            $resultado = $cadena1 . " tiene la palabra " . $cadena2 . "<br>";
            $resultado .= str_replace($cadena2, '', $cadena1);
        } else {
      
            $resultado = $cadena1 . " no contiene la palabra " . $cadena2;
        }

        echo $resultado;
    }
    ?>
</body>
</html>
