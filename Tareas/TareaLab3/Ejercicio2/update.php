<?php
include("conexion.php");
$id = $_POST['id'];
$nro = $_POST['nro'];
$id_tipo_habitacion = $_POST['id_tipo_habitacion'];
$bano_privado = $_POST['bano_privado'];
$espacio = $_POST['espacio'];
$precio = $_POST['precio'];

// Verifica si se cargó una nueva fotografía
if ($_FILES['fotografia']['size'] > 0) {
    // Obtiene la información de la nueva fotografía
    $archivo_original = $_FILES['fotografia']['name'];
    $arreglo = explode(".", $archivo_original);
    $extension = end($arreglo);
    $fotografia = uniqid() . '.' . $extension;

    // Copia la nueva fotografía al directorio de imágenes
    copy($_FILES['fotografia']['tmp_name'], 'images/' . $fotografia);

    // Actualiza la fotografía en la base de datos
    $sql_foto = "UPDATE fotos_habitacion SET fotografia='$fotografia' WHERE id_habitacion = $id";
    if ($con->query($sql_foto) === TRUE) {
        echo "Fotografía actualizada correctamente<br>";
    } else {
        echo "Error al actualizar la fotografía: " . $sql_foto . "<br>" . $con->error;
    }
}

// Actualiza los otros campos de la habitación
$sql = "UPDATE habitacion SET nro='$nro', id_tipo_habitacion='$id_tipo_habitacion', bano_privado='$bano_privado', espacio = $espacio, precio = $precio WHERE id=$id";
if ($con->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $sql . "<br>" . $con->error;
}
$con->close();
?>
<meta http-equiv="refresh" content="3; url=read.php" />

