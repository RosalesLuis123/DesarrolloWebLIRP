<?php
include('conexion.php');

$titulo = $_POST['titulo'];

// Assuming 'titulo' is a unique identifier for the record you want to delete
$sql = "DELETE FROM libros WHERE titulo = ?";
$stmt = mysqli_prepare($con, $sql);

// Bind the parameter
mysqli_stmt_bind_param($stmt, "s", $titulo);

// Execute the statement
mysqli_stmt_execute($stmt);

// Check for success
if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Libro eliminado correctamente";
} else {
    echo "Error al eliminar el libro o el libro no existe";
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);
?>
<button class="boton2" onclick="atras()">Inicio</button>
