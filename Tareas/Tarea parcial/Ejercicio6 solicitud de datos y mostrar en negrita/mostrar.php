<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
    <style>
        .rojo {
            color: red;
        }
        .negrita {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Datos Ingresados</h1>

    <?php
    if (isset($_POST['nombre']) && isset($_POST['ciudad'])) {
        $nombre = $_POST['nombre'];
        $ciudad = $_POST['ciudad'];
        
        echo "<p>Tu nombre: <span class='negrita'>$nombre</span></p>";
        echo "<p>Lugar donde vives: <span class='rojo'>$ciudad</span></p>";
    } else {
        echo "<p>No se proporcionaron datos válidos.</p>";
    }
    ?>

    <a href="formulario.html">Volver al formulario</a>
</body>
</html>
