<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nivel'])) {
    $usuarioId = $_POST['id'];
    $nuevoNivel = $_POST['nivel'];

    // Evitar inyección de SQL usando sentencias preparadas
    $updateSql = "UPDATE usuarios SET nivel = ? WHERE id = ?";
    $stmt = $con->prepare($updateSql);
    $stmt->bind_param("ii", $nuevoNivel, $usuarioId);

    if ($stmt->execute()) {
        // Devuelve el nuevo nivel para actualizar el botón en la interfaz
        echo $nuevoNivel;
        exit;
    } else {
        echo "Error al actualizar el nivel: " . $stmt->error;
    }
}

$sql = "SELECT id, usuario, nombrecompleto, cu, idcarrera, nivel FROM usuarios";
$resultado = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="estilos.css">
    <style>
button {
    width: 160px;
    height: 60px;
    font-size: 24px;
    margin: 5px;
}
button.verde {
    background-color: green;
    color: white;
}

button.rojo {
    background-color: red;
    color: white;
}

</style>
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
                            <button class="usuario <?php echo ($row['nivel'] == 1) ? 'rojo' : 'verde'; ?>" data-id="<?php echo $row['id']; ?>" data-nivel="<?php echo $row['nivel']; ?>" onclick="actualizarUsuario(this)">
                                <?php echo ($row['nivel'] == 1) ? 'Cambiar a Administrador' : 'Cambiar a Usuario'; ?>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <div>No existen registros que mostrar</div>
        <?php } ?>
    </div>

    <script>
        function actualizarUsuario(btn) {
            var idUsuario = btn.getAttribute('data-id');
            var nivelActual = btn.getAttribute('data-nivel');

     
            var nuevoNivel = (nivelActual == 1) ? 0 : 1;

     
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'listar.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Actualizar el botón con el nuevo nivel
                    btn.setAttribute('data-nivel', xhr.responseText);
                    btn.innerText = (xhr.responseText == 1) ? 'Cambiar a Administrador' : 'Cambiar a Usuario';

                    // Cambiar el color del botón según el nuevo nivel
                    btn.classList.remove('verde', 'rojo');
                    btn.classList.add(xhr.responseText == 0 ? 'verde' : 'rojo');
                }
            };
            xhr.send('id=' + idUsuario + '&nivel=' + nuevoNivel);

            return false;
        }
    </script>

    <?php
    $con->close();
    ?>
</body>

</html>
