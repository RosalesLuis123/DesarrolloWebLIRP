<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Resultado de la Multiplicación</h1>
    <?php
        $n = $_POST['n'];
        $result = 1;
        for ($i = 1; $i <= $n; $i++) {
            if (isset($_POST["numero{$i}"])) {
                $numero = $_POST["numero{$i}"];
                $result *= $numero;
            }
        }
        echo "La multiplicación de los números ingresados es: $result";
    ?>
</body>
</html>