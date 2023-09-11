<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Carreras</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <?php include('conexion.php');

    $sql = "SELECT id, nombre FROM carrera";
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
    <div contenedor>
        <table id="tabla-alumnos">
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['nombre']; ?></td>
                    <td>
                        <a href="form_update_carrera.php?id=<?php echo $row['id']; ?>">Editar</a>
                        <a href="deleteC.php?id=<?php echo $row['id']; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php
    } else {
    ?>
        <div>No existen registros que mostrar</div>
    <?php }
    ?>

    <a href="formu_carrera.php">Crear Carrera</a>
    </div>
</body>

</html>
