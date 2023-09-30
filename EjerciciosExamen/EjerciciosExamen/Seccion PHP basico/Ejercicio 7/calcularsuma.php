<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Resultado de la Suma</h1>
    <?php
        // Obtiene los valores de los parámetros GET
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        $suma = $num1 + $num2;

        // Muestra el resultado en una tabla con fondo verde
        echo '<table class="style">';
        // echo '<table border="1" style="background-color: green;">';
        echo '<tr><td class="style1">' . $num1 . '</td><td class="style2">+</td>
        <td class="style3">' . $num2 . '</td><td class="style4">=</td></td><td class="style5">' . $suma . '</td></tr>';
    ?>
</body>
</html>