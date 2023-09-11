<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,nombre from  carrera";
    $resultado = $con->query($sql);
    ?>
    <div class="contenedor">
    <form action="createC.php" method="post">
        <div>
            <label for="nombres">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <input type="submit" value="Crear">


    </form>
    </div>
</body>

</html>