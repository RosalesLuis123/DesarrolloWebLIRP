<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numeroAlumnos = $_POST["num_alumnos"];

    // Verificar que el número de alumnos sea válido
    if ($numeroAlumnos > 0) {
        // Generar el formulario para ingresar datos de los alumnos
        echo "<form action='procesar_insercion.php' method='POST'>";
        for ($i = 1; $i <= $numeroAlumnos; $i++) {
            echo "<h2>Alumno $i</h2>";
            echo "<label>Nombres:</label>";
            echo "<input type='text' name='nombres[]' required><br>";
            echo "<label>Apellidos:</label>";
            echo "<input type='text' name='apellidos[]' required><br>";
            echo "<label>CU:</label>";
            echo "<input type='text' name='cu[]' required><br>";
            echo "<label>Sexo:</label>";
            echo "<input type='radio' name='sexo[]' value='Masculino' required> Masculino";
            echo "<input type='radio' name='sexo[]' value='Femenino' required> Femenino<br>";
        }
        echo "<label>Carrera:</label>";
        echo "<select name='carrera[]'>";
        // Aquí debes cargar las opciones de carrera desde la base de datos
        echo "<option value='1'>Ing. De Sistemas</option>";
        echo "<option value='2'>Ing. en Telecomunicaciones</option>";
        echo "<option value='3'>Ing. Del Gas y Petróleo</option>";
        echo "<option value='4'>Ing. Eléctrica</option>";
        echo "</select><br>";
        echo "<input type='submit' value='Guardar'>";
        echo "</form>";
    } else {
        echo "El número de alumnos debe ser mayor que 0.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
