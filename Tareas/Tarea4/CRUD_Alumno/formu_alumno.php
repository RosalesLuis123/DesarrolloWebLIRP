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
    <div contenedor>
    <form action="create.php" method="post">
        <div>
            <label for="nombres">Nombres</label>
            <input type="text" name="nombres">
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div>
            <label for="CU">CU</label>
            <input type="text" name="CU">
        </div>
        <div>
        <label for="idcarrera">Carrera:</label>
            <select name="idcarrera">
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id'] ?>"><?php echo $row['nombre'] ?></option>


                <?php } ?>

            </select>
        </div>
        <input type="submit" value="Crear">


    </form>
    </div>
</body>

</html>