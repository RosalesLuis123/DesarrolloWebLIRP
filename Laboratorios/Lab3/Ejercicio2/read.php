</html>
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
    color: white;
}
.ListaC2 td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

    </style>
</head>

<body>

<?php include('conexion.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';
    $sql = "SELECT h.id,nro,h.id_tipo_habitacion,bano_privado,espacio,precio,t.descripcion as tipo_habitacion FROM habitacion h
    LEFT JOIN tipo_habitacion t on h.id_tipo_habitacion=t.id ";
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
    <div class="ListaC2">
        <table>
            <tr>
            <th><a href="read.php?orden=fotografia">fotografia</a></th>
            <th><a href="read.php?orden=nombres">Id</a></th>
                <th><a href="read.php?orden=apellidos">Numero</a> </th>
                <th><a href="read.php?orden=CU">Tipo habitacion</a></th>
                <th><a href="read.php?orden=carrera">Nro Banos</a></th>
                <th><a href="read.php?orden=carrera">espacio</a></th>
                <th><a href="read.php?orden=carrera">precio</a></th>
                <th><a href="read.php?orden=carrera">operaciones</a></th>
 
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
              <tr>
    <td><img src="images/<?php echo $row['fotografia'];  ?>" width="100px" ></td>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nro']; ?></td>
    <td><?php echo $row['tipo_habitacion']; ?></td>
    <td><?php echo $row['bano_privado']; ?></td>
    <td><?php echo $row['espacio']; ?></td>
    <td><?php echo $row['precio']; ?></td>
    <td>
        <a href="form_update_habitacion.php?id=<?php echo $row['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Eliminar</a>
    </td>
</tr>
            <?php } ?>
        </table>
    </div>
    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>


<a href="formu_habitacion.php">Crear Habitacion</a>

</body>

</html>
