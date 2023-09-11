<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM carrera WHERE id = '$id'";

    if ($con->query($sql) === TRUE) {
        echo "Se eliminó el registro correctamente";
    } else {
        echo "Error al eliminar el registro: " . $con->error;
    }
} else {
    echo "No se proporcionó un ID válido para la eliminación.";
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=readC.php" />

</body>
</html>
