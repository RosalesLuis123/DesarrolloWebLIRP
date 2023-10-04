<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .ListaC2 {
    display: flex;
    justify-content: center;
    align-items: center;
}
.ListaC2 th{
    border: 1px solid black;
    padding: 8px;
    text-align: center;

}
.ListaC2 td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

    </style>
</head>

<body>
    <h1>TIPO HABITACION</h1>
    <?php include('conexion.php');

$sql = "SELECT id, descripcion, numero_camas FROM tipo_habitacion";
    // echo $sql;
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
        <table class="ListaC2">
            <tr>
                <th>Descripcion</th>
                <th>Nuemro de Camas</th>
                <th>Operaciones</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['numero_camas']; ?></td>
                    <td>                        
                        <div class="operaciones">
                        <div class="operaciones_item">
                        <a href="form_update.php?id=<?php echo $row['id'];?>">Editar</a>
                        </div>
                        <div class="operaciones_itemE">
                        <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar</a>
                        </div>
                        </div> </td>

                </tr>

            <?php } ?>
        </table>

    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>
<div class="op">

<div class="operaciones_item1">
<a href="form.php">Crear Nueva Habitacion</a>
</div>
<!-- <div class="operaciones_item1">
<a href="menu_alumnos_tipo_habitacions.html">Volver al Menu</a>
</div>
</div> -->





</body>

</html>