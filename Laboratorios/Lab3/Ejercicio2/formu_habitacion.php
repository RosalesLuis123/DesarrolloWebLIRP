<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,descripcion from tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create.php" method="post" enctype="multipart/form-data"
>
        <div>
            <label for="nro">NRO habitacion:</label>
            <input type="text" name="nro">
        </div>
        <div>
        <label for="id_tipo_habitacion">tipo habitacion:</label>
            <select name="id_tipo_habitacion">
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['descripcion'] ?></option>


                <?php } ?>
            </select>
        </div>
        <div>
            <label for="bano_privado">Cantidad de banos::</label>
            <input type="text" name="bano_privado">
        </div>
        <div>
            <label for="espacio">espacio:</label>
            <input type="text" name="espacio">
        </div>
        <div>
            <label for="precio">precio:</label>
            <input type="text" name="precio">
        </div>
        
        <input type="submit" value="Crear">


    </form>

</body>

</html>

