<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

// Consultar la base de datos para obtener los datos de los alumnos
$sql = "SELECT * FROM Alumnos";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Nro</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellidos</th>";
    echo "<th>CU</th>";
    echo "<th>Sexo</th>";
    echo "<th>Carrera</th>";
    echo "</tr>";

    $nro = 1;
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $nro . "</td>";
        echo "<td>" . $row["Nombres"] . "</td>";
        echo "<td>" . $row["Apellidos"] . "</td>";
        echo "<td>" . $row["Cu"] . "</td>";
        echo "<td>" . $row["Sexo"] . "</td>";
        echo "<td>" . $row["CodigoCarrera"] . "</td>";
        echo "</tr>";
        $nro++;
    }
    echo "</table>";
} else {
    echo "No existen registros de alumnos.";
}

$con->close();
?>
