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

$id = $_POST['id'];
$nombre = $_POST['nombre']; 

$sql = "UPDATE carrera SET nombre='$nombre' WHERE id='$id'";

if ($con->query($sql) === TRUE) {
    echo "Se actualizó el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=readC.php" />

</body>
</html>
