<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $id = $_GET['id'];
    $sql = "SELECT h.id, nro, h.id_tipo_habitacion, bano_privado, espacio, precio, t.descripcion as tipo_habitacion, f.fotografia 
            FROM habitacion h
            LEFT JOIN tipo_habitacion t ON h.id_tipo_habitacion = t.id
            LEFT JOIN fotos_habitacion f ON h.id = f.id_habitacion
            WHERE h.id = $id";
    
    $sql1 = "SELECT id, descripcion FROM tipo_habitacion";
    $resultado1 = $con->query($sql1);
    $resultado = $con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div>
            <img src="images/<?php echo $row['fotografia'] ?>" alt="" style="width: 250px; height: 250px;">
        </div>

        <div>
            <label for="fotografia">Fotografia</label>
            <input type="file" name="fotografia">
        </div>
        <div>
            <label for="nombres">nro</label>
            <input type="text" name="nro" value="<?php echo $row['nro']?>">
        </div>
        <div>
        <label for="id_tipo_habitacion">tipo habitacion:</label>
            <select name="id_tipo_habitacion">
                <?php while ($row_tipo_habitacion = $resultado1->fetch_assoc()) { ?>
                    <option value="<?php echo $row_tipo_habitacion['id'] ?>" 
                    <?php echo $row_tipo_habitacion['id']==$row['id_tipo_habitacion']?"selected":"";  ?>     ><?php echo $row_tipo_habitacion['descripcion'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
        <div>
            <label for="apellidos">bano_privado</label>
            <input type="text" name="bano_privado" value="<?php echo $row['bano_privado']?>">
        </div>
            <label for="espacio">espacio:</label>
            <input type="text" name="espacio" value="<?php echo $row['espacio']?>">
        </div>
        </div>
            <label for="precio">precio:</label>
            <input type="text" name="precio" value="<?php echo $row['precio']?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar">


    </form>

</body>

</html>