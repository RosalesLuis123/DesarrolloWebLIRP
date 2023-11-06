<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Recuperar los datos del formulario (supongamos que los datos provienen de un formulario)
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];

// Sentencia SQL para la inserción de datos
$sql = "INSERT INTO libro (titulo, autor) VALUES ('$titulo', '$autor')";

if ($con->query($sql) === TRUE) {
    echo "Si se insertó";
} else {
    echo "No se insertó";
}

// Cerrar la conexión
$con->close();
?>
