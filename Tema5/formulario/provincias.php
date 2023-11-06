
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="provincias.php" method="post">
        <div>
            <label for="nombres">Nombre</label>
            <input type="text" name="nombres" id="nombres">
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido">
        </div>
        <div>
            <label for="departamento">Departamento</label>
            <select name="departamento" id="departamento" onchange="this.form.submit()">
                <option value="1">Chuquisaca</option>
                <option value="2">La Paz</option>
                <option value="3">Cochabamba</option>
                <option value="4">Oruro</option>
                <option value="5">Potosí</option>
                <option value="6">Tarija</option>
                <option value="7">Santa Cruz</option>
                <option value="8">Beni</option>
                <option value="9">Pando</option>
            </select>
        </div>
        <div>
        <?php 
         include("conexion.php");
         ?>
            <label for="provincia">Provincia</label>
            <select name="provincia" id="provincia">
                <!-- Las opciones de provincia se llenarán en provincias.php -->
            </select>
        </div>
    </form>
</body>
</html>
