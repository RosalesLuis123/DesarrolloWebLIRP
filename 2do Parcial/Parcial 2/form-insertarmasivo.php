
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php
    $n = $_GET['n'];
    for($i = 0; $i < $n; $i++){ ?>
   <form id="form" style="display: flex; flex-direction: column; gap: 10px;">
    <label for="titulo">Titulo:</label>
    <input type="text" name="titulo">
    <label for="autor">Autor:</label>
    <input type="text" name="autor">
    <label for="anio">Año:</label>
    <input type="number" name="anio">
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen">
</form>
<?php } ?>
<button type="button" style="width: 60px;" onclick="insertar()">Insertar</button>
</div>
<div id="mensaje">
    </div>
</body>
</html>