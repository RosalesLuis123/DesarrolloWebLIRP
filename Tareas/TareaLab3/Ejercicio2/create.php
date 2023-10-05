<?php
include('conexion.php'); 

$nro = $_POST['nro'];
$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

$archivo_original = $_FILES['fotografia']['name'];
$arreglo = explode(".", $archivo_original);
$extension = $arreglo[1];
$fotografia = uniqid() . '.' . $extension;

copy($_FILES['fotografia']['tmp_name'], 'images/' . $fotografia);


$sql_habitacion = "INSERT INTO habitacion (nro, id_tipo_habitacion, bano_privado, espacio, precio) VALUES ($nro, $id_tipo_habitacion, $bano_privado, $espacio, $precio)";

if ($con->query($sql_habitacion) === TRUE) {
    echo "Se creó el registro en la tabla habitacion correctamente";
} else {
    echo "Error en la tabla habitacion: " . $sql_habitacion . "<br>" . $con->error;
}

$id_habitacion = $con->insert_id;
$sql_fotos_habitacion = "INSERT INTO fotos_habitacion (id_habitacion, fotografia) VALUES ($id_habitacion, '$fotografia')";

if ($con->query($sql_fotos_habitacion) === TRUE) {
    echo "Se creó el registro en la tabla fotos_habitacion correctamente";
} else {
    echo "Error en la tabla fotos_habitacion: " . $sql_fotos_habitacion . "<br>" . $con->error;
}

$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />
