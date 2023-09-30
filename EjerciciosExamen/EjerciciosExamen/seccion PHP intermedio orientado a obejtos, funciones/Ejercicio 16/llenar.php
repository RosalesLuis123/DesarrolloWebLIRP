<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Llenar Cuadros de Texto</h1>
    <?php
        $n = $_POST['numero'];
        echo '<form action="multiplicacion.php" method="POST">';
        for ($i = 1; $i <= $n; $i++) {
            echo "<label for='numero{$i}'>Número {$i}:</label>";
            echo "<input type='number' name='numero{$i}' id='numero{$i}' required><br>";
        }
        echo '<input type="hidden" name="n" value="' . $n . '"><br>';
        echo '<input type="submit" value="Multiplicar">';
        echo '</form>';
    ?>
</body>
</html>