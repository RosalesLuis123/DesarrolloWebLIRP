<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST["apellidos"];
    $cu = $_POST["cu"];
    $sexo = $_POST["sexo"];
    $idCarrera = $_POST["carrera"];

    // Iterar a través de los datos de los alumnos e insertar en la base de datos
    for ($i = 0; $i < count($nombres); $i++) {
        $nombre = $nombres[$i];
        $apellido = $apellidos[$i];
        $cuAlumno = $cu[$i];
        $sexoAlumno = $sexo[$i];
        $carreraAlumno = $idCarrera[$i];

        $sql = "INSERT INTO alumnos (nombres, apellidos, Cu, Sexo, CodigoCarrera) 
                VALUES ('$nombre', '$apellido', '$cuAlumno', '$sexoAlumno', $carreraAlumno)";

        if ($con->query($sql) === TRUE) {
            echo "Se insertó el registro correctamente.<br>";
        } else {
            echo "Error al insertar el registro: " . $con->error . "<br>";
        }
    }

    $con->close();
} else {
    echo "Acceso no autorizado.";
}
?>
