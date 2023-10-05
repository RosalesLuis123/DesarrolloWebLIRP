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

        .ListaC2 th {
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
    <?php
    include('conexion.php');
    $orden = isset($_GET['orden']) ? $_GET['orden'] : 'id';

    $sql_tipos_habitacion = "SELECT id, descripcion FROM tipo_habitacion";
    $resultado_tipos_habitacion = $con->query($sql_tipos_habitacion);
    ?>

    <form action="read.php" method="GET">
        <div>
            <label for="id_tipo_habitacion">Tipo de Habitación:</label>
            <select name="id_tipo_habitacion">
                <option value="">Todas</option>
                <?php
                while ($row_tipo_habitacion = $resultado_tipos_habitacion->fetch_assoc()) {
                    $id_tipo_habitacion = $row_tipo_habitacion['id'];
                    $descripcion_tipo_habitacion = $row_tipo_habitacion['descripcion'];
                    echo "<option value='$id_tipo_habitacion'>$descripcion_tipo_habitacion</option>";
                }
                ?>
            </select>
            <input type="submit" value="Buscar por Tipo">
        </div>
    </form>

    <?php
    if (isset($_GET['id_tipo_habitacion']) && $_GET['id_tipo_habitacion'] !== "") {
        $id_tipo_habitacion = $_GET['id_tipo_habitacion'];
        $sql = "SELECT h.id, h.nro, h.id_tipo_habitacion, h.bano_privado, h.espacio, h.precio, t.descripcion as tipo_habitacion, f.fotografia, th.numero_camas
                FROM habitacion h
                LEFT JOIN tipo_habitacion t ON h.id_tipo_habitacion = t.id
                LEFT JOIN fotos_habitacion f ON h.id = f.id_habitacion
                LEFT JOIN tipo_habitacion th ON h.id_tipo_habitacion = th.id
                WHERE h.id_tipo_habitacion = $id_tipo_habitacion";
    } else {
        $sql = "SELECT h.id, h.nro, h.id_tipo_habitacion, h.bano_privado, h.espacio, h.precio, t.descripcion as tipo_habitacion, f.fotografia, th.numero_camas
                FROM habitacion h
                LEFT JOIN tipo_habitacion t ON h.id_tipo_habitacion = t.id
                LEFT JOIN fotos_habitacion f ON h.id = f.id_habitacion
                LEFT JOIN tipo_habitacion th ON h.id_tipo_habitacion = th.id";
    }

    $resultado = $con->query($sql);

    if ($resultado->num_rows > 0) {
    ?>
        <div class="ListaC2">
            <table>
                <tr>
                    <th><a href="read.php?orden=fotografia">Fotografía</a></th>
                    <th><a href="read.php?orden=apellidos">Número</a></th>
                    <th><a href="read.php?orden=CU">Tipo habitación</a></th>
                    <th><a href="read.php?orden=carrera">Nro Baños</a></th> 
                    <th><a href="read.php?orden=carrera">Nro camas</a></th> 
                    <th><a href="read.php?orden=carrera">Espacio</a></th>
                    <th><a href="read.php?orden=carrera">Precio</a></th>
                    <th><a href="read.php?orden=carrera">Operaciones</a></th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><img src="images/<?php echo $row['fotografia']; ?>" width="100px"></td>
                        <td><?php echo $row['nro']; ?></td>
                        <td><?php echo $row['tipo_habitacion']; ?></td>
                        <td><?php echo $row['bano_privado']; ?></td>
                        <td><?php echo $row['numero_camas']; ?></td>
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
    <?php } else { ?>
        <div>No existen registros que mostrar</div>
    <?php } ?>
    <a href="formu_habitacion.php">Crear Habitación</a>
</body>

</html>
