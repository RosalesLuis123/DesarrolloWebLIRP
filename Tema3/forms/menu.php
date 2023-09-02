<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    ?>
    <ul>
        <li><a href="operacion.php?operacion=suma&a=<?php echo $b?>">sumar</a></li>
        <li><a href="operacion.php?operacion=resta&a=<?php echo $b?>">restar</a></li>
        <li><a href="operacion.php?operacion=multiplicar&a=<?php echo $b?>">multiplicar</a></li>
        <li><a href="operacion.php?operacion=dividir&a=<?php echo $b?>">dividir</a></li>
    </ul>
</body>
</html>