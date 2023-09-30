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
    background-color: blue;
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

    <div>
        <form action="read.php" method="GET">
        </form>
    </div>
    <?php include('conexion.php');
    $orden=isset($_GET['orden'])?$_GET['orden']:'id';
    
    $sql = "SELECT id,nombre,correo,rol FROM usuario";
    
    $resultado = $con->query($sql);
    if ($resultado->num_rows > 0) {
    ?>
    <div class="ListaC2">
        <table>
            <tr>
                <th><a>id</a></th>
                <th><a>correo</a> </th>
                <th><a>nombre</a></th>
                <th><a>rol</a></th>
                <th><a>operacion</a></th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['rol']; ?></td>
                    <?php if ($row['rol']=="Administrador") {?>
                        <td><?php echo $row['rol']; ?></td>
                        <?php } ?>
                    
                </tr>
            <?php } ?>
        </table>
    </div>
    <?php
    } else {
    ?> <div>No existen registros que mostrar</div>
    <?php }
    ?>



</body>

</html>