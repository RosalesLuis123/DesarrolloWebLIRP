<?php
include('conexion.php'); 

$nro = $_POST['nro'];
$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

$sql = "INSERT INTO habitacion (nro, id_tipo_habitacion, bano_privado, espacio, precio) VALUES ($nro, $id_tipo_habitacion, $bano_privado, $espacio, $precio)";

echo $sql;

if ($con->query($sql) === TRUE) {
    echo "Se creó el registro correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />
