
<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nivel'])) {
    $usuarioId = $_POST['id'];
    $nuevoNivel = $_POST['nivel'];
    $updateSql = "UPDATE usuarios SET nivel = $nuevoNivel WHERE id = $usuarioId";
    if ($con->query($updateSql)) {
        echo '<script>window.location.href = "listar.php"; cargarContenido("listar.php");</script>';
        exit;
    } else {
        echo "Error al actualizar el nivel: " . $con->error;
    }
}

$sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel FROM usuarios";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="lista-container">
        <?php
        if ($resultado->num_rows > 0) {
        ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th><a>Correos</a></th>
                    <th><a>Nombre Completo</a></th>
                    <th>Operación</th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['usuario']; ?></td>
                        <td><?php echo $row['nombrecompleto']; ?></td>
                        <td>
                            <?php if ($row['nivel'] == 1) { ?>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="nivel" value="0">
                                    <input type="submit" value="Cambiar a Administrador">
                                </form>
                            <?php } else { ?>
                                <form method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <input type="hidden" name="nivel" value="1">
                                    <input type="submit" value="Cambiar a Usuario">
                                </form>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <div>No existen registros que mostrar</div>
        <?php } ?>
    </div>

</body>

</html>

<?php
$con->close();
?>
