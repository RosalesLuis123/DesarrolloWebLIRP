<?php
// Incluye el archivo de conexión a la base de datos
include 'conexion.php';

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];

    // Realiza la inserción en la base de datos
    $query = "INSERT INTO usuarios (nombres, apellidos, email, sexo) VALUES ('$nombres', '$apellidos', '$email', '$sexo')";

    if ($con->query($query) === TRUE) {
        $response = array("success" => true, "message" => "Usuario registrado correctamente");
    } else {
        $response = array("success" => false, "message" => "Error al registrar el usuario: " . $con->error);
    }

    // Devuelve la respuesta en formato JSON
    header('Content-Type: application/json');
    echo json_encode($response);

    // Cierra la conexión a la base de datos
    $con->close();
} else {
    // Si no es una solicitud POST, devuelve un error
    $response = array("success" => false, "message" => "Método no permitido");
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
