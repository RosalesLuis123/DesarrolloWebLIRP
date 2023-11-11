<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container"><?php
    $n = $_GET['n'];
    for($i = 0; $i < $n; $i++){ ?>
    <input type="number" class="cuadro">
<?php } ?>
<button onclick="calcular()">Calcular</button>
<div id="sumar">Sumas es:</div></div>
</body>
</html>