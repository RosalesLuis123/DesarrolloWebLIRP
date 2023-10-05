<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php include('conexion.php');
    $sql = "SELECT id,descripcion,numero_camas from  tipo_habitacion";
    $resultado = $con->query($sql);
    ?>

    <form action="create.php" method="post">
        <div>
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" id="cuad">
        </div>
        <div>
            <label for="numero_camas">Numero Camas</label>
            <input type="number" name="numero_camas" id="cuad">
        </div>
        
        <input type="submit" value="Crear" id="cuadcrear">


    </form>

</body>

</html>