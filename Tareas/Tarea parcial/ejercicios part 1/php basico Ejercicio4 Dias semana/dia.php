<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Día de la Semana</title>
</head>
<body>
    <h1>Día de la Semana</h1>

    <?php
 
    if (isset($_GET['n'])) {
        $n = $_GET['n'];
        
        $diasSemana = [
            1 => 'Lunes',
            2 => 'Martes',
            3 => 'Miércoles',
            4 => 'Jueves',
            5 => 'Viernes',
            6 => 'Sábado',
            7 => 'Domingo'
        ];

        echo "<p>Día seleccionado: {$diasSemana[$n]}</p>";
        echo "<select>";
        foreach ($diasSemana as $key => $dia) {
            $selected = ($key == $n) ? "selected" : "";
            echo "<option value='$key' $selected>$dia</option>";
        }
        echo "</select>";
    } else {
        echo "<p>Por favor, ingresa un valor válido (del 1 al 7).</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
