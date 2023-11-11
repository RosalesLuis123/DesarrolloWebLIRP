<?php
include('conexion.php');

$orden = isset($_GET['orden']) ? $_GET['orden'] : 'id';
$sql = "SELECT id, imagen, titulo FROM libros ORDER BY $orden";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styles.css">
    <title>Lista de Libros</title>
</head>

<body>
<div class="container">
    <?php
    if ($resultado->num_rows > 0) {
    ?>
        <table>
            <tr>
            <th>Título</th>
                <th>Imagen</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['titulo']; ?></td>
                    <td><img src="images/<?php echo $row['imagen']; ?>" alt="Libro" width="100px"></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <div>No existen registros que mostrar</div>
    <?php } ?>

</body>

</html>
</div>
<?php
$con->close();
?>
