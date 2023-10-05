<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include("conexion.php");
    $id=$_GET['id'];
    $sql="SELECT descripcion,numero_camas from tipo_habitacion where id=$id";
    // $sql1 = "SELECT id,descripcion from  tipo_habitacion";
    // $resultado1 = $con->query($sql1);
    $resultado=$con->query($sql);
    $row = $resultado->fetch_assoc();
    
    ?>
    <form action="update.php" method="post">

        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" value="<?php echo $row['descripcion']?>" id="cuad">
        </div>
        <div>
            <label for="numero_camas">Numero de Camas</label>
            <input type="number" name="numero_camas" value="<?php echo $row['numero_camas']?>" id="cuad">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
        <input type="submit" value="Editar" id="cuadcrear">


    </form>

</body>

</html>