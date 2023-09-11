<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carrera</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php
    include("conexion.php");
    $id = $_GET['id'];
    $sql = "SELECT id, nombre FROM carrera WHERE id = '$id'";
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();
    ?>
<div class="contenedor">
    <form action="updateC.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Editar">
    </form>
</div>
</body>

</html>
